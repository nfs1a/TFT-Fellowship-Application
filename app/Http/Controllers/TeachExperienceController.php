<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\TeachExperienceRequest;
use Log;

class TeachExperienceController extends Controller
{
    public function create()
    {
        return view('teachExperience.create');
    }

    public function store(TeachExperienceRequest $request)
    {
        $input = $request->all();
        Log::info('-------- TeachExperienceController: store --------');
        Log::info($input);
        Log::info('--------');

        return redirect('/dashboard');
    }

}
