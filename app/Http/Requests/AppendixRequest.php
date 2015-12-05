<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class AppendixRequest extends Request
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

        $rules = [
            'name' => 'required'
        ];
        return $rules;
    }

    public function messages()
    {
        return [
            'required' => '這個欄位是必填欄位',
        ];
    }
}

// Reference:
// http://ericlbarnes.com/laravel-array-validation/