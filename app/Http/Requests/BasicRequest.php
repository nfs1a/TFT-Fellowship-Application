<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class BasicRequest extends Request
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

        return [
            'name'      => 'required|min:2|max:20',
            'idNumber'  => 'required|max:10|min:10',
            'sex'       => 'required|digits:1',
            'birthday'  => 'required|date',
            'phone'     => 'required|max:15|min:9',
            'cellPhone' => 'required|max:15|min:10',
            'skype'     => 'required|max:50',
            'email'     => 'required|email|max:50',
            'secEmail'  => 'required|email|max:50',
            'address'   => 'required|max:50',
            'status'    => 'required|digits:1'
        ];
    }

    public function messages()
    {
        return [
            'min' => '至少要 :min 字以上'
        ];
    }
}
