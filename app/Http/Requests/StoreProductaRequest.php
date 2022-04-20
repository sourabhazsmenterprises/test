<?php

namespace App\Http\Requests;

use App\Product;
use Illuminate\Foundation\Http\FormRequest;

class StoreProductaRequest extends FormRequest
{
    public function authorize()
    {
        return \Gate::allows('producta_create');
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
