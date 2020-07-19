<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
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
            'title'=>'required|min:3|string',
            'description'=>'required|min:3|string',
            'price'=>'required|min:3',
            'subcategory_id'=>'required',
            'tags'=>'required',
            'image'=>'required|image|mimes:jpeg,jpg,png|max:1024',
        ];
    }
    public function messages()
    {
        return [
            'title'=>'Title is required and min of 3 characters',
            'subcategory_id.required'=>'Category field is required',
        ];
    }
}
