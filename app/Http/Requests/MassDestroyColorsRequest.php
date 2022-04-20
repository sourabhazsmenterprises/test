<?php

namespace App\Http\Requests;

use App\Colors;
use Gate;
use Illuminate\Foundation\Http\FormRequest;

class MassDestroyColorsRequest extends FormRequest
{
    public function authorize()
    {
        return abort_if(Gate::denies('colors_delete'), 403, '403 Forbidden') ?? true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:colors,id',
        ];
    }
}
