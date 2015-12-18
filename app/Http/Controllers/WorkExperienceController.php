<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\WorkExperienceRequest;
use Log;

use Auth;
use App\Progress;
use App\WorkExperience;

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
        $input = $request->all();
        // Log::info('------- WorkExperienceController: store -------'); 
        // Log::info(count($input['organization']));        
        // Log::info('===============================================\n\n');
        Auth::user()->work()->first()->workExperiences()->truncate();
        foreach ([0,1,2] as $i) {
            $workExperience = new WorkExperience;
            $workExperience->organization = $input['organization'][$i];
            $workExperience->position = $input['position'][$i];
            $workExperience->startDate = $input['startDate'][$i];
            $workExperience->endDate = $input['endDate'][$i];
            $workExperience->description = $input['description'][$i];
            Auth::user()->work()->first()->workExperiences()->save($workExperience);
        }

        // Log::info('------- WorkExperienceController: store -------'); 
        // Log::info(Auth::user()->work()->first()->workExperiences()->get());        
        // Log::info('===============================================\n\n');
        
        $progress = Auth::user()->progress;
        $progress->work = 1;
        Auth::user()->progress()->save($progress);

        return redirect('/dashboard');
    }

}
