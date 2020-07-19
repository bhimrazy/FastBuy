<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AdminRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {   $user = \App\User::where('email',$this->email)->first();
        if(is_null($user)){
            return false;
        }
        return $user->isAdmin();

    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'email' => 'required|string|max:255|exists:users,email',
            'password' => 'required|string|min:8',
        ];

    }
    public function messages()
    {
        return [
            'email'=>'Title is required and min of 3 characters',
            'password'=>'Category field is required',
        ];
    }
}
