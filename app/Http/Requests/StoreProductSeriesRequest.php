<?php

namespace App\Http\Requests;

use App\ProductSeries;
use Illuminate\Foundation\Http\FormRequest;

class StoreProductSeriesRequest extends FormRequest
{
    public function authorize()
    {
        return \Gate::allows('productseries_create');
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
