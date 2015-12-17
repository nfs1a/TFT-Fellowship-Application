<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Log;
use Auth;

class applyLicenseController extends Controller
{
    public function index()
    {
        $loginUser = Auth::check() ? Auth::user()->name : null;
        $data = compact('loginUser');
        return view('applyLicense.index',$data);
    }

}
