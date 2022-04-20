<?php

namespace App\Http\Requests;

use App\ProductStorage;
use Illuminate\Foundation\Http\FormRequest;

class UpdateProductStorageRequest extends FormRequest
{
    public function authorize()
    {
        return \Gate::allows('productstorage_edit');
    }

    public function rules()
    {
        return [
            'product_id' => [
                'required',
            ],
        ];
    }
}
