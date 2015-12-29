<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\AppendixRequest;
use Log;
use Input;
use Auth;

use App\Appendix;

class AppendixController extends Controller
{
    public function create()
    {
        $userAppendix = Auth::user()->appendix()->first();
        $loginUser = Auth::check() ? Auth::user()->eamil : null;
        $data = compact('loginUser', 'userAppendix');
        return view('appendix.create',$data);
    }

    public function fileUpload($fileName)
    {
        if(Input::hasFile($fileName)){
            $file = Input::file($fileName);
            $extension = $file->getClientOriginalExtension();
            $file_name = strval(time()).str_random(5).'.'.$extension;
            $destination_path = public_path().'/user-upload/';
            $upload_success = $file->move($destination_path, $file_name);
            $fileUrl = '/user-upload/'. $file_name;
            return $fileUrl;
        }
        else{
            return false;
        }
    } 

    public function store(AppendixRequest $request)
    {
        $input = $request->all();
        Log::info('-------- AppendixController: store --------');

        if( Auth::user()->appendix()->first() ){
            Log::info('1\n\n');
            $appendix = Auth::user()->appendix()->first();
        } else {
            Log::info('2\n\n');
            $appendix = new Appendix;   
        }

        foreach ($input as $key => $value) {
            Log::info($input);
            if(Input::hasFile($key)){
                $fileUrl = AppendixController::fileUpload($key);
                $appendix->$key = $fileUrl;
            }
        }
        Auth::user()->appendix()->save($appendix);
        
        Log::info('===============================================\n\n');

        $progress = Auth::user()->progress;
        $progress->appendix = 1;
        Auth::user()->progress()->save($progress);

        return redirect('/dashboard');
    }

}
