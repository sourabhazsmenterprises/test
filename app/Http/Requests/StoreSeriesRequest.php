<?php

namespace App\Http\Requests;

use App\Series;
use Illuminate\Foundation\Http\FormRequest;

class StoreSeriesRequest extends FormRequest
{
    public function authorize()
    {
        return \Gate::allows('series_create');
    }

    public function rules()
    {
        return [
            'name' => [
                'required',
            ],
        ];
    }
}
