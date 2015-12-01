<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class TeachExperienceRequest extends Request
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

        $rules = [];
        // your arrays can be done like this
        foreach($this->request->get('organization') as $key => $value)
        {
            $rules['organization.'.$key] = 'required|min:5'; // you can set rules for all the array items
        }

        return $rules;
    }

    public function messages()
    {
        return [
            'min' => '至少要 :min 字以上'
        ];
    }
}

// Reference:
// http://ericlbarnes.com/laravel-array-validation/
