<?php

namespace App\Http\Requests;

use App\Colors;
use Illuminate\Foundation\Http\FormRequest;

class StoreColorsRequest extends FormRequest
{
    public function authorize()
    {
        return \Gate::allows('colors_create');
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
