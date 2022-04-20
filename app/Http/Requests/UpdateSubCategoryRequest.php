<?php

namespace App\Http\Requests;

use App\SubCategory;
use Illuminate\Foundation\Http\FormRequest;

class UpdateSubCategoryRequest extends FormRequest
{
    public function authorize()
    {
        return \Gate::allows('subcategory_edit');
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
