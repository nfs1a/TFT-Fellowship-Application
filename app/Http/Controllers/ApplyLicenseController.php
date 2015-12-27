<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Log;
use Auth;
use App\User;

class applyLicenseController extends Controller
{
    public function index()
    {
        $loginUser = Auth::check() ? Auth::user()->email : null;
        $data = compact('loginUser', 'loginUser');
        return view('applyLicense.index',$data);
    }

}
