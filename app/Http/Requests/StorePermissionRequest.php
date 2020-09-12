<?php

namespace App\Http\Requests;

use App\Permission;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Gate;
use Symfony\Component\HttpFoundation\Response;

class StorePermissionRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('permission_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;

    }

    public function rules()
    {
        return [

            'title'=>'bail|required|regex:/^[a-zA-Z]/|min:3|string|unique:permissions'
        ];
    }
    public function messages()
    {
        return [
            'title.regex'=>'Title is required.Use A-Za-z formatting.'
        ];
    }
}
