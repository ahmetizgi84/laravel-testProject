<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductUpdateRequest extends FormRequest
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
            'productName'=> 'required | min:3 | max:200',
            'productImageUrl' => 'required',
            'productPrice' => 'required',
            'productCategory' => 'required',
            'productDetail'=> 'required | max:1000'
        ];
    }

    public function attributes()
    {
        return [
            'productName'=> 'Ürün adı',
            'productImageUrl' => 'Ürün resim linki',
            'productPrice' => 'Ürün fiyatı',
            'productCategory' => 'Ürün kategorisi',
            'productDetail'=> 'Ürün detayı'
        ];
    }
}
