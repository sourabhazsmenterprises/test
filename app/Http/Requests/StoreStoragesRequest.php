<?php

namespace App\Http\Requests;

use App\Storages;
use Illuminate\Foundation\Http\FormRequest;

class StoreStoragesRequest extends FormRequest
{
    public function authorize()
    {
        return \Gate::allows('storages_create');
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
