<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProductRequest extends FormRequest
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
            'category_id' => 'required',
            'product_name'=> 'required',
            'product_code'=>'nullable|integer',
            'product_size'=> 'nullable',
            'product_description'=> 'required',
            'product_image'=>'required',
            'product_price' => 'required',
            'product_quantity'=> 'nullable'
        ];
    }

    public function messages()
    {
        return [
            'category_id.required' => 'Category Name is required'
        ];
    }
}
