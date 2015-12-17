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
        return view('workExperience.create');
    }

    public function store(WorkExperienceRequest $request)
    {
        $input = $request->all();
        // Log::info('-------- WorkExperienceController: store --------');
        // Log::info($input);
        // Log::info('--------');

        Log::info('-------- Auth::user()->progress() --------');
        Log::info(Auth::user()->progress()->first());
        Log::info('--------');

        $progress = Auth::user()->progress;
        $progress = new Progress;
        $progress->work = 1;
        Auth::user()->progress()->save($progress);

        Log::info('-------- Auth::user()->progress() --------');
        Log::info(Auth::user()->progress()->first());
        Log::info('--------');

        return redirect('/dashboard');
    }

}
