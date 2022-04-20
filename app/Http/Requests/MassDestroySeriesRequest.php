<?php

namespace App\Http\Requests;

use App\Series;
use Gate;
use Illuminate\Foundation\Http\FormRequest;

class MassDestroySeriesRequest extends FormRequest
{
    public function authorize()
    {
        return abort_if(Gate::denies('series_delete'), 403, '403 Forbidden') ?? true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:series,id',
        ];
    }
}
