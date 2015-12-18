<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class EssayRequest extends Request
{

    public function authorize()
    {
        return true;
    }


    public function rules()
    {
        $rules= [];
        foreach($this->request->get('essay') as $key => $value)
        {
            $rules['essay.'.$key] = 'required|max:500';
        }
        return $rules;
    }

    public function messages()
    {
        return [
            'required' => '這個欄位是必填欄位',
            'max' => '這個欄位字數不可以超過 :max'
        ];
    }
}
