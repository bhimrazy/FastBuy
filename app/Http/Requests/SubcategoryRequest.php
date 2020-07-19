<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SubcategoryRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
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
            'title'=>'required|min:3|string|unique:subcategories',
            'category_id'=>'required|exists:categories,id'
        ];
    }
    public function messages()
    {
        return [
            'title'=>'Title is required and min of 3 characters'
        ];
    }
}
