<?php

namespace App\Http\Requests;

use App\ProductRam;
use Illuminate\Foundation\Http\FormRequest;

class StoreProductRamRequest extends FormRequest
{
    public function authorize()
    {
        return \Gate::allows('productram_create');
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
