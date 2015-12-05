<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\AppendixRequest;
use Log;

class AppendixController extends Controller
{
    public function create()
    {
        return view('appendix.create');
    }

    public function store(AppendixRequest $request)
    {
        $input = $request->all();
        Log::info('-------- AppendixController: store --------');
        Log::info($input);
        Log::info('--------');

        return redirect('/dashboard');
    }

}
