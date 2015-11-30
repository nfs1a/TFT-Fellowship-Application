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

}
