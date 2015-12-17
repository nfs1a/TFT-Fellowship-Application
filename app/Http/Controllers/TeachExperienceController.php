<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\TeachExperienceRequest;
use Log;
use Auth;

class TeachExperienceController extends Controller
{
    public function create()
    {
        $loginUser = Auth::check() ? Auth::user()->name : null;
        $data = compact('loginUser');
        return view('teachExperience.create',$data);
    }

    public function store(TeachExperienceRequest $request)
    {
        $input = $request->all();

        $progress = Auth::user()->progress;
        $progress->teach = 1;
        Auth::user()->progress()->save($progress);

        return redirect('/dashboard');
    }

}
