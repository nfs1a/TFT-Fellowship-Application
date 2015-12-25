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
        return view('payment.paymentResult');

    }

    public function paymentResultServer()
    {
        return view('payment.paymentResultServer');

    }

    public function insertPayment($trade_no)
    {
        $user = Auth::user();
        DB::table('payment_table')->insert(
            ['user_id' => $user->id,'email' => $user->email, 'trade_no' => $trade_no]);

    }

    public function insertPaymentResult($trade_no, $payment_type, $payment_date, $szRtnCode)
    {
        DB::table('payment_table')
        ->where('trade_no', $trade_no)
        ->update(
            ['payment_type' => $payment_type, 
             'payment_date' => $payment_date,
             'result' => $szRtnCode
            ]);

        if($szRtnCode == 1) 
        {
            $user_id = DB::table('payment_table')->where('trade_no', $trade_no)->pluck('user_id');

            DB::table('progresses')
                ->where('user_id', $user_id)
                ->update(['allpay' => 1]);

            $email = DB::table('payment_table')->where('trade_no', $trade_no)->pluck('email');

            $data = array('email' => $email);

            Mail::send('payment.paymentResultMail', $data, function($message)  use ($data)
            {
                $message->to($data['email'], '付款通知')->subject('報名費付款成功');
            });
        }


        

    }

}
