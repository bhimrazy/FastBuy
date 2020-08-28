<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CheckoutRequest extends FormRequest
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
            'shipping_first_name'=>'required',
            'billing_first_name'=>'required',
            'shipping_last_name'=>'required',
            'billing_last_name'=>'required',
            'shipping_email'=>'required',
            'billing_email'=>'required',
            'shipping_phone'=>'required',
            'billing_phone'=>'required',
            'shipping_address'=>'required',
            'billing_address'=>'required',
            'billing_country'=>'required',
            'shipping_country'=>'required',
            'shipping_city'=>'required',
            'billing_city'=>'required',
            'shipping_state'=>'required',
            'billing_state'=>'required',
            'shipping_post_code'=>'required',
            'billing_post_code'=>'required',
            'payment_method'=>'required',
            'billing_to'=>'false',
        ];
    }
}
