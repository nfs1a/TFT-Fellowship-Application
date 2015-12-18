<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\EssayRequest;
use Validator;
use Log;
use Auth;

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
        Auth::user()->work()->first()->expertises()->truncate();
        foreach ([0, 1, 2] as $i) {
            $essays = new Expertise;
            $expertise->expertise = $input['expertise'][$i];
            $expertise->introduction = $input['introduction'][$i];
            Auth::user()->work()->first()->expertises()->save($expertise);
        }
        $progress = Auth::user()->progress;
        $progress->essay = 1;
        Auth::user()->progress()->save($progress);

        return redirect('/dashboard');
//
    }
}
