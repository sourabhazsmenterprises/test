<?php

namespace App\Http\Requests;

use App\Brand;
use Gate;
use Illuminate\Foundation\Http\FormRequest;

class MassDestroyBrandRequest extends FormRequest
{
    public function authorize()
    {
        return abort_if(Gate::denies('brand_delete'), 403, '403 Forbidden') ?? true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:brands,id',
        ];
    }
}
