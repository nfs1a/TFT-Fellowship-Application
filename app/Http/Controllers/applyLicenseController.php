<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Validator;
use Log;

class applyLicenseController extends Controller
{
    public function index()
    {
        return view('applyLicense.index');
    }

}
