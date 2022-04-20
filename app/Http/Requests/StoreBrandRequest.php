<?php

namespace App\Http\Requests;

use App\Brand;
use Illuminate\Foundation\Http\FormRequest;

class StoreBrandRequest extends FormRequest
{
    public function authorize()
    {
        return \Gate::allows('brand_create');
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
