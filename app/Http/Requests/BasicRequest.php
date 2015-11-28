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
        return false;    //打開驗證
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
            'sex'       => 'required|max:1',
            'phone'     => ['required','regex:/0\d{1,2}(\d{6,8})/'],
            'cell_phone'=> ['required','regex:/09\d{8}/'],
            'skype'     => 'required|max:50',
            'email'     => 'required|email|max:50',
            'sec_email' => 'email|max:50',
            //'birthday'  => 'required|max:10',
            'address'   => 'required|max:50'
        ];
    }
}
