<?php
use SocialNorm\Exceptions\ApplicationRejectedException;
use SocialNorm\Exceptions\InvalidAuthorizationCodeException;
use App\Progress;
use Illuminate\Support\MessageBag;


Route::pattern('id', '[0-9]+'); // 規定ID格式

// ------- 前台 -------
// Account
Route::get('login', 'AccountController@showLogin');
Route::post('login', 'AccountController@login');
Route::get('signup', 'AccountController@showsignup');
Route::post('signup', 'AccountController@signup');
Route::get('reset', 'AccountController@reset');

Route::get('auth/facebook', 'Auth\AuthController@redirectToProvider');
Route::get('auth/facebook/callback', 'Auth\AuthController@handleProviderCallback');

// Redirect to Facebook for authorization
Route::get('{provider}/authorize', function($provider) {
    return SocialAuth::authorize($provider);
});

// Facebook redirects here after authorization
Route::get('{provider}/login', function($provider) {
    try{
        SocialAuth::login($provider, function($user, $userDetails) { 

        	$authuser = Auth::user();
            if (!$authuser){
            	$user->email = $userDetails->email;
            	$user->facebook_id = $userDetails->id;
        	    $user->save();
                Auth::login($user);
                $user = Auth::user();
                $progress = new Progress;
                Auth::user()->progress()->save($progress);
            }
        });
    } catch (ApplicationRejectedException $e) {
        $errors = new MessageBag(['error_signup' => ['使用者取消Facebook授權']]);
        return Redirect::to('login')->withErrors($errors);
    } catch (Exception $e) {
        $errors = new MessageBag(['error_signup' => ['Email已存在, 請直接登入']]);
        return Redirect::to('login')->withErrors($errors);
    } 
    $authuser = Auth::user();
    if ($authuser){
    	return Redirect::intended();
    }

});
// Reset Password Email
Route::get('password/email', 'Auth\PasswordController@getEmail');
Route::post('password/email', 'Auth\PasswordController@postEmail');
// Password Reset Route
Route::get('password/reset/{token}', 'Auth\PasswordController@getReset');
Route::post('password/reset/', 'Auth\PasswordController@postReset');


// 首頁
Route::get('/', ['middleware' => 'auth', 'uses' => 'ApplyLicenseController@index']);
// 申請須知
Route::get('applyLicense', ['middleware' => 'auth', 'uses' => 'ApplyLicenseController@index']);
// dashboard
Route::get ('dashboard',  ['middleware' => 'auth', 'uses' => 'PagesController@dashboard']);

// 第一區塊：基本資料
Route::get ('basic/create', [ 'middleware' => 'auth', 'as' => 'basic.create' , 'uses' => 'BasicController@create']);   //新增基本資料表單
Route::post('basic', [ 'middleware' => 'auth', 'as' => 'basic.store'  , 'uses' => 'BasicController@store']);    //新增使用者資料到資料庫
Route::get ('api/basic', [ 'middleware' => 'auth', 'uses' => 'BasicController@api' ]);
// 第二區塊：工作/社團經驗
Route::get ('workExperience/create', [ 'middleware' => 'auth', 'uses' => 'WorkExperienceController@create' ]);
Route::post('workExperience/create', [ 'middleware' => 'auth', 'uses' => 'WorkExperienceController@store' ]);
// 第三區塊：教學/志工服務經驗
Route::get ('teachExperience/create', [ 'middleware' => 'auth', 'uses' => 'TeachExperienceController@create' ]);
Route::post('teachExperience/create', [ 'middleware' => 'auth', 'uses' => 'TeachExperienceController@store' ]);
// 第四區塊：Teach for Taiwan教師計畫簡答題 （小菜）
Route::get ('essay/create', [ 'middleware' => 'auth', 'as' => 'essay.create' , 'uses' => 'EssayController@create' ]);
Route::post('essay', [ 'middleware' => 'auth', 'as' => 'essay.store'  , 'uses' => 'EssayController@store' ]);
// 第五區塊：附件區
Route::get ('appendix/create', [ 'middleware' => 'auth', 'uses' => 'AppendixController@create' ]);
Route::post('appendix/create', [ 'middleware' => 'auth', 'uses' => 'AppendixController@store' ]);
// 第六區塊：串金流歐付寶
Route::get('paymentList', ['middleware' => 'auth', 'uses' => 'PaymentController@showPaymentList']);   //Display payment list
Route::post('paymentResult', 'PaymentController@showPaymentResult');   //Display payment result
Route::post('paymentResultServer', 'PaymentController@PaymentResultServer');   // Receive transaction result from Allpay
// 資料預覽頁面
Route::get ('preview', [ 'middleware' => 'auth', 'uses' => 'PreviewController@index' ]);
Route::get ('api/preview', [ 'middleware' => 'auth', 'uses' => 'PreviewController@indexApi' ]);
Route::get ('pdf', [ 'middleware' => 'auth', 'uses' => 'PreviewController@pdf' ]);

// 感謝頁面
Route::get ('thankyou', [ 'middleware' => 'auth', 'uses' => 'PagesController@thankyouPage' ]);

Route::get('logout', function(){
    Auth::logout();
    return Redirect::to('/');
});


