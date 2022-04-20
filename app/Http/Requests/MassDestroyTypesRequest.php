<?php

namespace App\Http\Requests;

use App\Types;
use Gate;
use Illuminate\Foundation\Http\FormRequest;

class MassDestroyTypesRequest extends FormRequest
{
    public function authorize()
    {
        return abort_if(Gate::denies('types_delete'), 403, '403 Forbidden') ?? true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:brands,id',
        ];
    }
}
