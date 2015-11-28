<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Validator;

class EssayController extends Controller
{
    public function create()
    {
        return view('essay.create');
    }

    public function store(Request $request)
    {
        $input = $request->all();
        $messages = [
            'required' => ':attribute 選項必填',
        ];
        //驗證規則
        $rules = [
            'motivation'    => 'required|max:1000',
            'experience'    => 'required|max:1000',
            'impressive'    => 'required|max:1000'
        ];
        return $request->all();
        //$v = Validator::make($request->all(),$rules ,$messages);

//        if ($v->fails())
//        {
//            return redirect()->back()->withErrors($v->errors())->withInput($input);
//        }
//        else{
//            return redirect('/dashboard');
//        }
    }
}
