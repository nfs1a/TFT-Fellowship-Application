<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class teachExperience extends Controller
{
    public function index()
    {
        return view('teachExperience.index');
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
