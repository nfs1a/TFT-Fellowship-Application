<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Validator;
use Log;
use View;
use Input;
use Auth;
use Redirect;
use Hash;
use App\User;
use SocialNorm\Exceptions\ApplicationRejectedException;
use SocialNorm\Exceptions\InvalidAuthorizationCodeException;

class AccountController extends Controller {

	public function showLogin()
	{
		return view('account.account');
	}

    public function login()
    {
    	 $userdata = array(
                'email' => Input::get('email'),
                'password' => Input::get('password'));
        if(Auth::attempt($userdata)){
                return Redirect::to('dashboard');
        } else {
                return Redirect::to('login')->withErrors(['密碼錯誤, 請重試', 'The Message']);
        }
    }

    	public function showSignup()
	{
		return view('account.account');
	}

    public function signup()
    {
        $userdata = array(
                'username'=>Input::get('username'),
                'email'=>Input::get('email'),
                'password'=>Hash::make(Input::get('password')) );
                $user = new User($userdata);
                $user->save();
               
                return Redirect::to('login');
    }

    public function logout()
    {
    	Auth::logout();
    	return Redirect::to('login');
    }

    public function reset()
    {
    	    $credentials = array('email' => Input::get('email'));
 
    return Password::remind($credentials);
    }

        public function socialauth($provider)
    {
        return SocialAuth::authorize($provider);
    }

}