<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class MovieFormRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        if($this->method() == 'DELETE'){
            return [];
        }

        return [
            'name'      => 'required|string|max:255',
            'year'      => 'required|numeric|digits:4|min:1900|max:' . (date('Y')),
            'format_id' => 'required|numeric',
            'actors'    => 'required|array',
        ];
    }
}
