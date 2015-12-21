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
        $userEssay = Auth::user()->essay()->first();
        $loginUser = Auth::check() ? Auth::user()->name : null;
        $data = compact('loginUser','userEssay');
        return view('essay.create', $data);
    }

    public function store(EssayRequest $request)
    {
        $input = $request->all();
        Auth::user()->essay()->delete();
        $essays = new Essay;
        $essays->essay0 = $input['essay'][0];
        $essays->essay1 = $input['essay'][1];
        $essays->essay2 = $input['essay'][2];
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

//
//public
//function create()
//{
//    $userTeach = Auth::user()->teach()->first();
//    $teachExperiences = isset(Auth::user()->teach()->with('teachExperiences')->first()->teachExperiences) ?
//                              Auth::user()->teach()->with('teachExperiences')->first()->teachExperiences : null;
//    Log::info('------- TeachExperienceController: create -------');
//    Log::info($userTeach);
//    Log::info($teachExperiences);
//    Log::info('===============================================\n\n');
//    $loginUser = Auth::check() ? Auth::user()->name : null;
//    $data = compact('loginUser', 'userTeach', 'teachExperiences');
//    return view('teachExperience.create', $data);
//}
//
//public
//function store(TeachExperienceRequest $request)
//{
//    $input = $request->all();
//    // Log::info('------- TeachExperienceController: store -------');
//    // Log::info($input);
//    // Log::info('===============================================\n\n');
//
//    Auth::user()->teach()->delete();
//    $teach = new Teach;
//    $teach->preschool = $input['preschool'];
//    $teach->elementary = $input['elementary'];
//    $teach->secondary = $input['secondary'];
//    $teach->special = $input['special'];
//    Auth::user()->teach()->save($teach);
//
//    Auth::user()->teach()->first()->teachExperiences()->delete();
//    foreach ([0, 1, 2] as $i) {
//        $teachExperience = new teachExperience;
//        $teachExperience->organization = $input['organization'][$i];
//        $teachExperience->position = $input['position'][$i];
//        $teachExperience->startDate = $input['startDate'][$i];
//        $teachExperience->endDate = $input['endDate'][$i];
//        $teachExperience->description = $input['description'][$i];
//        Auth::user()->teach()->first()->teachExperiences()->save($teachExperience);
//    }
//
//    Log::info('------- TeachExperienceController: store -------');
//    Log::info(Auth::user()->teach()->with('teachExperiences')->get());
//    Log::info('===============================================\n\n');
//
//    $progress = Auth::user()->progress;
//    $progress->teach = 1;
//    Auth::user()->progress()->save($progress);
//
//    return redirect('/dashboard');
//}