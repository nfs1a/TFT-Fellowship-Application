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
        $rules = [
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
//        foreach($this->request->get('school') as $key => $value)
//        {
//            if($key == 0)
//                continue;
//            $rules['degreeLevel.'.$key] = 'max:2';
//            $rules['major.'.$key] = 'max:10';
//            $rules['majorMainClass.'.$key] = 'digits:10';
//            $rules['majorSubClass.'.$key] = 'digits:10';
//            $rules['eduMainArea.'.$key] = 'digits:10';
//            $rules['eduSubArea.'.$key] = 'digits:10';
//            $rules['eduPeriodStartYear.'.$key] = 'digits:4';
//            $rules['eduPeriodStartMon.'.$key] = 'between:1,2';
//            $rules['eduPeriodEndYear.'.$key] = 'digits:4';
//            $rules['eduPeriodEndMon.'.$key] = 'between:1,2';
//            $rules['eduStatus.'.$key] = 'digits:1';
//        }
        $rules['degreeLevel.0'] = 'required|max:2';
        $rules['major.0'] = 'required|max:10';
        $rules['majorMainClass.0'] = 'required|digits:10';
        $rules['majorSubClass.0'] = 'required|digits:10';
        $rules['eduMainArea.0'] = 'required|digits:10';
        $rules['eduSubArea.0'] = 'required|digits:10';
        $rules['eduPeriodStartYear.0'] = 'required|digits:4';
        $rules['eduPeriodStartMon.0'] = 'required|between:1,2';
        $rules['eduPeriodEndYear.0'] = 'required|digits:4';
        $rules['eduPeriodEndMon.0'] = 'required|between:1,2';
        $rules['eduStatus.0'] = 'required|digits:1';

        return $rules;
    }

    public function messages()
    {
        return [
            'min' => '至少要 :min 字以上'
        ];
    }
}
