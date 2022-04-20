<?php

namespace App\Http\Requests;

use App\Product;
use Illuminate\Foundation\Http\FormRequest;

class StoreProductgRequest extends FormRequest
{
    public function authorize()
    {
        return \Gate::allows('productg_create');
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
