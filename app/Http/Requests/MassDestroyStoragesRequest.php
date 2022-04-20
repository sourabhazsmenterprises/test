<?php

namespace App\Http\Requests;

use App\Storages;
use Gate;
use Illuminate\Foundation\Http\FormRequest;

class MassDestroyStoragesRequest extends FormRequest
{
    public function authorize()
    {
        return abort_if(Gate::denies('storages_delete'), 403, '403 Forbidden') ?? true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:storages,id',
        ];
    }
}
