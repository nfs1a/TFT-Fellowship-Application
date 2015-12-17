<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\User;
use Auth;

class PagesController extends Controller
{
    public function dashboard()
    {
        if (Auth::check()){
        	$loginUser = Auth::check() ? Auth::user()->name : null;
        	$user = Auth::user()->with('progress')->first();
        } else {
        	$user = new User;
            $user->name = 'test'.rand(0,100);
            $user->email = 'test'.rand(0,100);
            $user->password = bcrypt('test');
            $user->save();
            Auth::login($user);
            $user = Auth::user();
            $loginUser = Auth::check() ? Auth::user()->name : null;
        }
        $data = compact("loginUser", "user");
        return view('dashboard.index', $data);
    }

    public function basic()
    {
        return view('dashboard.basic');
    }
}
