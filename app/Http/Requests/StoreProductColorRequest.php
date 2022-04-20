<?php

namespace App\Http\Requests;

use App\ProductColor;
use Illuminate\Foundation\Http\FormRequest;

class StoreProductColorRequest extends FormRequest
{
    public function authorize()
    {
        return \Gate::allows('productcolor_create');
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
