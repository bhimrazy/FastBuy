<?php

namespace App\Http\Requests;

use App\User;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class StoreUserRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('user_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;

    }

    public function rules()
    {
        return [
            'first_name'     => [
                'required',
            ],
            'last_name'     => [
                'required',
            ],
            'email'    => [
                'required', 'string', 'email', 'max:255', 'unique:admins'
            ],
            'password' => [
                'required',
            ],
            'type' => [
                'required',
            ],
            'roles.*'  => [
                'integer',
            ],
            'roles'    => [
                'required',
                'array',
            ],
        ];

    }
}
