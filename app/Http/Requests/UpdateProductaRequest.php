<?php

namespace App\Http\Requests;

use App\Product;
use Illuminate\Foundation\Http\FormRequest;

class UpdateProductaRequest extends FormRequest
{
    public function authorize()
    {
        return \Gate::allows('producta_edit');
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
