<?php

namespace App\Http\Requests;

use App\Types;
use Illuminate\Foundation\Http\FormRequest;

class StoreTypesRequest extends FormRequest
{
    public function authorize()
    {
        return \Gate::allows('types_create');
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
