<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Validator;
use Log;
use Mail;
use App\User;
use Illuminate\Http\Request;
use Auth;
use DB;
use Illuminate\Support\Facades\Redirect;



class PaymentController extends Controller
{


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function showPaymentList()
    {
        return view('payment.paymentList');
    }

    public function showPaymentResult()
    {
        // Mail::send('payment.paymentResultMail', ['name' => 'Teach For Taiwan'], function($message) 
        // {
        //     $user = Auth::user();
        //     $message->to($user->email, '付款通知')->subject('報名費付款成功');
        // });
        return view('payment.paymentResult');

    }

    public function insertPayment($trade_no)
    {
        $user = Auth::user();
        DB::table('payment_table')->insert(
            ['email' => $user->email, 'trade_no' => $trade_no]);

    }

    public function insertPaymentSuccessResult($trade_no, $payment_type, $payment_date)
    {
        $user = Auth::user();
        DB::table('payment_table')
        ->where('email', $user->email)
        ->where('trade_no', $trade_no)
        ->update(
            ['payment_type' => $payment_type, 
             'payment_date' => $payment_date
            ]);

    }

}
