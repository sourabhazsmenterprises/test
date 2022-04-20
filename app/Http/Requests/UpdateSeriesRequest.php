<?php

namespace App\Http\Requests;

use App\Series;
use Illuminate\Foundation\Http\FormRequest;

class UpdateSeriesRequest extends FormRequest
{
    public function authorize()
    {
        return \Gate::allows('series_edit');
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
