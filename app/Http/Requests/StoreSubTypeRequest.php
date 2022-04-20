<?php

namespace App\Http\Requests;

use App\SubType;
use Illuminate\Foundation\Http\FormRequest;

class StoreSubTypeRequest extends FormRequest
{
    public function authorize()
    {
        return \Gate::allows('subtype_create');
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
