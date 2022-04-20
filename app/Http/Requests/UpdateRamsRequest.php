<?php

namespace App\Http\Requests;

use App\Rams;
use Illuminate\Foundation\Http\FormRequest;

class UpdateRamsRequest extends FormRequest
{
    public function authorize()
    {
        return \Gate::allows('rams_edit');
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
