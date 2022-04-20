<?php

namespace App\Http\Requests;

use App\Brand;
use Illuminate\Foundation\Http\FormRequest;

class UpdateBrandRequest extends FormRequest
{
    public function authorize()
    {
        return \Gate::allows('brand_edit');
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
