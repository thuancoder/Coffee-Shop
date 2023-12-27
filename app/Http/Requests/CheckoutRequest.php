<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CheckoutRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'customer_name' => 'required',
            'customer_phone'=>'digits_between:9,10',
            'customer_email' => 'email',
        ];

    }
    public function messages()
    {
       return [
           'customer_name.required'=> 'Không được để trống họ tên',
           'customer_phone.digits_between'=> 'Số điện thoại phải từ 9 đến 10 số',
           'customer_email.email'=> 'Email không đúng dịnh dạng',
       ];
    }
}
