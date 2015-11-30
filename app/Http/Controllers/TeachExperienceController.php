<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Validator;
use Log;

class TeachExperienceController extends Controller
{
    public function create()
    {
        return view('teachExperience.create');
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
