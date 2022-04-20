<?php

namespace App\Http\Requests;

use App\SubType;
use Gate;
use Illuminate\Foundation\Http\FormRequest;

class MassDestroySubTypeRequest extends FormRequest
{
    public function authorize()
    {
        return abort_if(Gate::denies('subtype_delete'), 403, '403 Forbidden') ?? true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:subtype,id',
        ];
    }
}
