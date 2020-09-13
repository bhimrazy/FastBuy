<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Gate;
use Symfony\Component\HttpFoundation\Response;

class UpdateBrandRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        abort_if(Gate::denies('brand_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'title'=>'bail|required|regex:/^[a-zA-Z]/|min:3|string|unique:brands,id',
            'image'=>'nullable|image|mimes:jpeg,jpg,png|max:1024',
        ];
    }
    public function messages()
    {
        return [
            'title.regex'=>'Title is required.Use A-Za-z formatting.'
        ];
    }
}
