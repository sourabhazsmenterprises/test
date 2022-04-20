<?php

namespace App\Http\Requests;

use App\Types;
use Illuminate\Foundation\Http\FormRequest;

class UpdateTypesRequest extends FormRequest
{
    public function authorize()
    {
        return \Gate::allows('types_edit');
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
