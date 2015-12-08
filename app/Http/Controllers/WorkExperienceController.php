<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\WorkExperienceRequest;
use Log;

class WorkExperienceController extends Controller
{
    public function create()
    {
        return view('workExperience.create');
    }

    public function store(WorkExperienceRequest $request)
    {
        $input = $request->all();
        Log::info('-------- WorkExperienceController: store --------');
        Log::info($input);
        Log::info('--------');

        return redirect('/dashboard');
    }

}
