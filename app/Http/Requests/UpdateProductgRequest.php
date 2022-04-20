<?php

namespace App\Http\Requests;

use App\Product;
use Illuminate\Foundation\Http\FormRequest;

class UpdateProductgRequest extends FormRequest
{
    public function authorize()
    {
        return \Gate::allows('productg_edit');
    }

    public function rules()
    {
        return [
            'name' => [
                'required',
            ],
        ];
    }
}
