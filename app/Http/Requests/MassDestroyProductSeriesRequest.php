<?php

namespace App\Http\Requests;

use App\ProductSeries;
use Gate;
use Illuminate\Foundation\Http\FormRequest;

class MassDestroyProductSeriesRequest extends FormRequest
{
    public function authorize()
    {
        return abort_if(Gate::denies('productseries_delete'), 403, '403 Forbidden') ?? true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:series,id',
        ];
    }
}
