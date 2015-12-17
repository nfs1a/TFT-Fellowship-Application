<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\User;
use Auth;
use App\Progress;
class PagesController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function dashboard()
    {
        if (Auth::check()){
        	$loginUser = Auth::check() ? Auth::user()->id : null;
        	$user = User::with('progress')->get()->find(Auth::user()->id);
        } else {
        	$user = new User;
            $user->name = 'test'.rand(0,100);
            $user->email = 'test'.rand(0,100);
            $user->password = bcrypt('test');
            $user->save();
            Auth::login($user);
            $user = Auth::user();
            $progress = new Progress;
            Auth::user()->progress()->save($progress);
            $loginUser = Auth::check() ? Auth::user()->name : null;
        }
        $progress = Auth::user()->progress()->first();
        $progress->allpay = 1;
        $isPass = $progress['basic'] * $progress['work'] * $progress['teach'] * $progress['essay'] * $progress['appendix'] * $progress['allpay'];
        $data = compact("loginUser", "user", "isPass", 'progress');

        return view('dashboard.index', $data);
    }

    public function basic()
    {
        return view('dashboard.basic');
    }
}

