<?php

namespace App\Http\Requests;

use App\ProductSeries;
use Illuminate\Foundation\Http\FormRequest;

class UpdateProductSeriesRequest extends FormRequest
{
    public function authorize()
    {
        return \Gate::allows('productseries_edit');
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
