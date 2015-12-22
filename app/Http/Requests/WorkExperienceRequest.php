<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class WorkExperienceRequest extends Request
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
            $rules['expertise.'.$key] = 'max:10';
            $rules['introduction.'.$key] = 'max:30';
            $rules['organization.'.$key] = 'max:20';
            $rules['position.'.$key] = 'max:20';
            $rules['startDate.'.$key] = 'date';
            $rules['endDate.'.$key] = 'date';
            $rules['description.'.$key] = 'max:300';
        }
        $rules['expertise.0'] = 'required|max:10';
        $rules['introduction.0'] = 'required|max:30';
        $rules['organization.0'] = 'required|max:20';
        $rules['position.0'] = 'required|max:20';
        $rules['startDate.0'] = 'required|date';
        $rules['endDate.0'] = 'required|date';

        return $rules;
    }

    public function messages()
    {
        return [
            'required' => '這個欄位是必填欄位',
            'max' => '這個欄位字數不可以超過 :max',
            'date' => '請選擇有效的日期欄位'
        ];
    }
}

// Reference:
// http://ericlbarnes.com/laravel-array-validation/