<?php

namespace App\Http\Requests;

use App\Colors;
use Illuminate\Foundation\Http\FormRequest;

class UpdateColorsRequest extends FormRequest
{
    public function authorize()
    {
        return \Gate::allows('colors_edit');
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
