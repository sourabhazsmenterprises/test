<?php

namespace App\Http\Requests;

use App\ProductColor;
use Gate;
use Illuminate\Foundation\Http\FormRequest;

class MassDestroyProductColorRequest extends FormRequest
{
    public function authorize()
    {
        return abort_if(Gate::denies('productcolor_delete'), 403, '403 Forbidden') ?? true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:brands,id',
        ];
    }
}
