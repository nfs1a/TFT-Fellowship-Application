<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Log;

class applyLicenseController extends Controller
{
    public function index()
    {
        return view('applyLicense.index');
    }

}
