<?php

namespace App\Http\Requests;

use App\ProductRam;
use Illuminate\Foundation\Http\FormRequest;

class UpdateProductRamRequest extends FormRequest
{
    public function authorize()
    {
        return \Gate::allows('productram_edit');
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
