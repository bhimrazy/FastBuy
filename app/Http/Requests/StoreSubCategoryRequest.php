<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Gate;
use Symfony\Component\HttpFoundation\Response;

class StoreSubCategoryRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        abort_if(Gate::denies('product_category_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');
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
            'title'=>'bail|required|regex:/^[a-zA-Z]/|min:3|string|unique:subcategories',
            'category_id'=>'required|exists:categories,id'
        ];
    }
    public function messages()
    {
        return [
            'title'=>'Title is required and min of 3 characters',
            'title.regex'=>'The title format is invalid.Use A-Za-z Formatting.',
            'category_id.required'=>'The category field is required.'
        ];
    }
}
