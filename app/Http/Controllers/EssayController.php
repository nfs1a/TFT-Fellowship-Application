<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\EssayRequest;
use Validator;
use Log;
use Auth;
use App\Essay;

class EssayController extends Controller
{
    public function create()
    {
        $loginUser = Auth::check() ? Auth::user()->name : null;
        $data = compact('loginUser');
        return view('essay.create', $data);
    }

    public function store(EssayRequest $request)
    {
        $input = $request->all();
        Auth::user()->essay()->delete();
        $essays = new Essay;
        $essays->essay0= $input['essay'][0];
        $essays->essay1= $input['essay'][1];
        $essays->essay2= $input['essay'][2];
        Auth::user()->essay()->save($essays);

        Log::info('------- EssayController: store -------');
        Log::info(Auth::user()->essay()->first()->get());
        Log::info('=======================================\n\n');


        $progress = Auth::user()->progress;
        $progress->essay = 1;
        Auth::user()->progress()->save($progress);

        return redirect('/dashboard');
    }
}
