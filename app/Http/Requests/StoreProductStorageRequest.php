<?php

namespace App\Http\Requests;

use App\ProductStorage;
use Illuminate\Foundation\Http\FormRequest;

class StoreProductStorageRequest extends FormRequest
{
    public function authorize()
    {
        return \Gate::allows('productstorage_create');
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
