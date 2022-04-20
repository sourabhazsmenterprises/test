<?php

namespace App\Http\Requests;

use App\ProductRam;
use Gate;
use Illuminate\Foundation\Http\FormRequest;

class MassDestroyProductRamRequest extends FormRequest
{
    public function authorize()
    {
        return abort_if(Gate::denies('productram_delete'), 403, '403 Forbidden') ?? true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:brands,id',
        ];
    }
}
