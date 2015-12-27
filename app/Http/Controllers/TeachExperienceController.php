<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\TeachExperienceRequest;
use Log;
use Auth;

use App\Teach;
use App\teachExperience;

class TeachExperienceController extends Controller
{
    public function create()
    {
        $userTeach = Auth::user()->teach()->first();
        $teachExperiences = isset(Auth::user()->teach()->with('teachExperiences')->first()->teachExperiences)? Auth::user()->teach()->with('teachExperiences')->first()->teachExperiences: null;
        Log::info('------- TeachExperienceController: create -------'); 
        Log::info($userTeach);        
        Log::info($teachExperiences);        
        Log::info('===============================================\n\n');
        $loginUser = Auth::check() ? Auth::user()->email : null;
        $data = compact('loginUser', 'userTeach', 'teachExperiences');
        return view('teachExperience.create',$data);
    }

    public function store(TeachExperienceRequest $request)
    {
        $input = $request->all();
        // Log::info('------- TeachExperienceController: store -------'); 
        // Log::info($input);        
        // Log::info('===============================================\n\n');

        Auth::user()->teach()->delete();
        $teach = new Teach;
        $teach->preschool = $input['preschool'];
        $teach->elementary = $input['elementary'];
        $teach->secondary = $input['secondary'];
        $teach->special = $input['special'];
        Auth::user()->teach()->save($teach);

        Auth::user()->teach()->first()->teachExperiences()->delete();
        foreach ([0,1,2] as $i) {
            $teachExperience = new teachExperience;
            $teachExperience->organization = $input['organization'][$i];
            $teachExperience->position = $input['position'][$i];
            $teachExperience->startDate = $input['startDate'][$i];
            $teachExperience->endDate = $input['endDate'][$i];
            $teachExperience->description = $input['description'][$i];
            Auth::user()->teach()->first()->teachExperiences()->save($teachExperience);
        }

        Log::info('------- TeachExperienceController: store -------'); 
        Log::info(Auth::user()->teach()->with('teachExperiences')->get());        
        Log::info('===============================================\n\n');

        $progress = Auth::user()->progress;
        $progress->teach = 1;
        Auth::user()->progress()->save($progress);

        return redirect('/dashboard');
    }

}
