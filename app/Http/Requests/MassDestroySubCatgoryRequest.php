<?php

namespace App\Http\Requests;

use App\SubCategory;
use Gate;
use Illuminate\Foundation\Http\FormRequest;

class MassDestroySubCategoryRequest extends FormRequest
{
    public function authorize()
    {
        return abort_if(Gate::denies('subcategory_delete'), 403, '403 Forbidden') ?? true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:sub_categories,id',
        ];
    }
}
