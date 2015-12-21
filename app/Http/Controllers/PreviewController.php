<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Log;
use Auth;

use App\User;

class PreviewController extends Controller
{
    public function index()
    {
        $user = User::with('work', 'teach', 'essay', 'basic', 'appendix', 'work.workExperiences', 'work.expertises', 'teach.teachExperiences','basic.eduHistorys')->get()->find(Auth::user()->id);
        $loginUser = Auth::check() ? Auth::user()->name : null;
        $data = compact('loginUser', 'user');
		return view('preview.index',$data);
    }

    public function index_()
    {
        $user = User::with('work', 'teach', 'essay', 'basic', 'appendix', 'work.workExperiences', 'work.expertises', 'teach.teachExperiences','basic.eduHistorys')->get()->find(Auth::user()->id);
        $loginUser = Auth::check() ? Auth::user()->name : null;
        return $data = compact('loginUser', 'user');
    }

}
