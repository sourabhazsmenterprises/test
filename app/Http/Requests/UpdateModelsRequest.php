<?php

namespace App\Http\Requests;

use App\Models;
use Illuminate\Foundation\Http\FormRequest;

class UpdateModelsRequest extends FormRequest
{
    public function authorize()
    {
        return \Gate::allows('models_edit');
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
