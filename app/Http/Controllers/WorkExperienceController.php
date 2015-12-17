<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\WorkExperienceRequest;
use Log;

use Auth;
use App\Progress;

class WorkExperienceController extends Controller
{
    public function create()
    {
        $loginUser = Auth::check() ? Auth::user()->name : null;
        $data = compact('loginUser');
        return view('workExperience.create',$data);
    }

    public function store(WorkExperienceRequest $request)
    {

        $progress = Auth::user()->progress;
        $progress->work = 1;
        Auth::user()->progress()->save($progress);

        return redirect('/dashboard');
    }

}
