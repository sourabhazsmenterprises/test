<?php

namespace App\Http\Requests;

use App\Rams;
use Gate;
use Illuminate\Foundation\Http\FormRequest;

class MassDestroyRamsRequest extends FormRequest
{
    public function authorize()
    {
        return abort_if(Gate::denies('rams_delete'), 403, '403 Forbidden') ?? true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:rams,id',
        ];
    }
}
