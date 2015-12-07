<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Log;

class PreviewController extends Controller
{
    public function index()
    {
        return view('preview.index');
    }

}
