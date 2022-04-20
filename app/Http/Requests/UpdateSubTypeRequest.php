<?php

namespace App\Http\Requests;

use App\SubType;
use Illuminate\Foundation\Http\FormRequest;

class UpdateSubTypeRequest extends FormRequest
{
    public function authorize()
    {
        return \Gate::allows('subtype_edit');
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
