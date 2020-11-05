<?php

namespace App\Traits;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;


trait Auditable
{   protected static $request;
    public static function bootAuditable()
    {
        static::$request = App::make(Request::class);
        static::created(function (Model $model) {
            self::audit('created', $model);
        });

        static::updated(function (Model $model) {
            self::audit('updated', $model);
        });

        static::deleted(function (Model $model) {
            self::audit('deleted', $model);
        });
    }

    protected static function audit($action, $model)
    {
        $data = [
            'user_agent'     => Auditable::$request->userAgent(),
            'ip_address'     => Auditable::$request->ip,
            'module'         => get_class($model) ?? null,
            'action'         => $action,
            'activity'         =>$action.$model,
            'user_id'        => auth()->guard('admin')->user()==null?Auditable::$request->user()->getKey() : null,
            'admin_id'        =>auth()->guard('admin')->user()!=null?auth()->guard('admin')->id():null,
            'reference_user' => auth()->guard('admin')->user()!=null?auth()->guard('admin')->id():auth()->id(),
            'reference_id'   => $model->id ?? null,
            'reference_name' => auth()->guard('admin')->user()!=null?auth()->guard('admin')->user()->getFullName():auth()->user()->getFullName(),
            'type'           => 'info',
            'url'           => Auditable::$request->fullUrl(),
        ];
        if (!in_array($action, ['loggedIn', 'password'])) {
            $data['request'] = json_encode(Auditable::$request->input());
        }
        \App\LogHistory::create($data);
    }
}
