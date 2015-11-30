<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Validator;
use Log;

class WorkExperienceController extends Controller
{
    public function create()
    {
        return view('workExperience.create');
    }

    public function store(Request $request)
    {
        $input = $request->all();
        Log::info('--------');
        Log::info($input);
        Log::info('--------');

        return redirect('/dashboard');
    }

}
