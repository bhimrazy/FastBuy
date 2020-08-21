<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Gate;
use Symfony\Component\HttpFoundation\Response;

class StoreProductRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        abort_if(Gate::denies('product_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

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
            'name'=>'required|min:3|string|unique:products',
            'description'=>'required|min:3|string',
            'attributes'=>'required|min:3|string',
            'price'=>'required|min:3|integer',
            'subcategory_id'=>'required|exists:subcategories,id',
            'brand_id'=>'required|exists:brands,id',
            'tags'=>'required',
            'sku'=>'required|string',
            'image.*'=>'required|image|mimes:jpeg,jpg,png|max:1024',
            'image'=>'required|array',
            'discount'=>'required|integer|min:1|max:100',
            'quantity'=>'required|numeric',
            'featured'=>'',
            'status'=>'',
            'stock'=>'',
            'product_type'=>'required|string',
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
