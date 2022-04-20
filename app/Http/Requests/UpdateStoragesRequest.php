<?php

namespace App\Http\Requests;

use App\Storages;
use Illuminate\Foundation\Http\FormRequest;

class UpdateStoragesRequest extends FormRequest
{
    public function authorize()
    {
        return \Gate::allows('storages_edit');
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
