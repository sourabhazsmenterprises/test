<?php

namespace App\Http\Requests;

use App\Models;
use Illuminate\Foundation\Http\FormRequest;

class StoreModelsRequest extends FormRequest
{
    public function authorize()
    {
        return \Gate::allows('models_create');
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
