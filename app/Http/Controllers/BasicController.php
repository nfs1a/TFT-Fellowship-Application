<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\BasicRequest;
//use App\Basic;
//use Validator;
//use Log;
//use Request;


//use App\Http\Requests\PostStoreRequest;
//use App\Http\Requests\CommentStoreRequest;

class BasicController extends Controller
{
    public function index()
    {
        $basic = Basic::all();

        $post_type = '基本資料列表';
        //把性別代號轉換成文字
        foreach($basic as $var){
            if($var->sex == 1 ) $var->sex = '男';
            elseif ($var->sex == 2 ) $var->sex = '女';
            else $var->sex = '其他';
        }
        $data = compact('basic','post_type');

        return view('basic.index', $data);
    }


    public function create()
    {
        return view('basic.create');
    }


    public function store(BasicRequest $request)
    {
        $input=$request->all();
        return $input;
    }


    public function show($id)
    {
        $query = Basic::find($id);
        return view('basic.show',compact('query'));
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
