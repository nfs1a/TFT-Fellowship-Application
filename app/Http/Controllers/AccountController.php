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
use App\Progress;
use DB;
use Illuminate\Support\MessageBag;

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
                return Redirect::to('applyLicense');
        } else {
                $errors = new MessageBag(['error_login' => ['密碼錯誤或Email不存在, 請重試']]);
                return Redirect::to('login')->withErrors($errors);
        }
    }

    	public function showSignup()
	{
		return view('account.account');
	}

    public function signup()
    {
        $emali = Input::get('email');
        $results = DB::select( DB::raw("SELECT * FROM users WHERE email = '$emali'") );

        if(count($results) > '0') {
            $errors = new MessageBag(['error_signup' => ['Email已存在, 請直接登入']]);
            return Redirect::to('login')->withErrors($errors);
        }
        $user = new User;
        $user->name = Input::get('username');
        $user->email = $emali;
        $user->password = Hash::make(Input::get('password'));
        $user->save();
        Auth::login($user);
        $user = Auth::user();
        $progress = new Progress;
        Auth::user()->progress()->save($progress);

        $message = new MessageBag(['success_signup' => ['註冊完成, 請登入']]);
        return Redirect::to('login')->withErrors($message);
    }

    public function reset()
    {
    	    $credentials = array('email' => Input::get('email'));
 
    return Password::remind($credentials);
    }


}