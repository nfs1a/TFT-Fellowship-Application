<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\User;
use Auth;
use App\Progress;
use App\Work;
use Mail;

class PagesController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function dashboard()
    {
        
        $user = User::with('progress')->get()->find(Auth::user()->id);
        $loginUser = Auth::check() ? Auth::user()->email : null;
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

    public function thankyouPage() {

        Mail::send('payment.paymentResultMail', ['key' => 'value'], function($message)
        {
            $currentuser = Auth::user();
            $message->to($currentuser->email, '報名結果')->subject('報名資料繳交成功');
        });
        return view('thankyou.thankyoupage');
    }
}

