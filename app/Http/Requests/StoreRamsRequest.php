<?php

namespace App\Http\Requests;

use App\Rams;
use Illuminate\Foundation\Http\FormRequest;

class StoreRamsRequest extends FormRequest
{
    public function authorize()
    {
        return \Gate::allows('rams_create');
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
