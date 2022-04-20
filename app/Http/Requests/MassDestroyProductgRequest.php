<?php

namespace App\Http\Requests;

use App\Product;
use Gate;
use Illuminate\Foundation\Http\FormRequest;

class MassDestroyProductgRequest extends FormRequest
{
    public function authorize()
    {
        return abort_if(Gate::denies('productg_delete'), 403, '403 Forbidden') ?? true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:productsg,id',
        ];
    }
}
