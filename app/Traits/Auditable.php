<?php

namespace App\Traits;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;


trait Auditable
{
    public static function bootAuditable()
    {
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
            'user_agent'     => request()->userAgent(),
            'ip_address'     => request()->ip(),
            'module'         => get_class($model) ?? null,
            'action'         => $action,
            'activity'         =>$action.' '.($model->title??$model->name).' '.substr(get_class($model), 4).' under Module '.get_class($model),
            //'user_id'        => auth()->guard('admin')->user()==null?request()->user()->getKey() : null,
            'user_id'        => auth()->guard('admin')->user()==null?auth()->id() : null,
            'admin_id'        =>auth()->guard('admin')->user()!=null?auth()->guard('admin')->id():null,
            'reference_user' => auth()->guard('admin')->user()!=null?auth()->guard('admin')->id():auth()->id(),
            'reference_id'   => $model->id ?? null,
            'reference_name' => auth()->guard('admin')->user()!=null?auth()->guard('admin')->user()->getFullName():auth()->user()->getFullName(),
            'type'           => 'info',
            'url'           => request()->fullUrl(),
        ];
        if (!in_array($action, ['loggedIn', 'password'])) {
            $data['request'] = json_encode(request()->input());
        }
        \App\LogHistory::create($data);
    }
}
