<?php

namespace App\Http\Requests;

use App\ProductColor;
use Illuminate\Foundation\Http\FormRequest;

class UpdateProductColorRequest extends FormRequest
{
    public function authorize()
    {
        return \Gate::allows('productcolor_edit');
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
