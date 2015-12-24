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
Route::get('/', ['middleware' => 'auth', 'uses' => 'PagesController@dashboard']);
Route::get('home', ['middleware' => 'auth', 'uses' => 'PagesController@dashboard']);
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
//Route::get('/','ApplyLicenseController@index');
// 申請須知
Route::get('applyLicense','ApplyLicenseController@index');
// dashboard
//Route::get('dashboard','PagesController@dashboard');
Route::get('dashboard', ['middleware' => 'auth', 'uses' => 'PagesController@dashboard']);

// 第一區塊：基本資料
Route::get      ('basic'            , ['as' => 'basic.index'  , 'uses' => 'BasicController@index']);    //顯示所有列表
Route::get      ('basic/{id}'       , ['as' => 'basic.show'   , 'uses' => 'BasicController@show']);     //顯示某個人的資料
Route::get      ('basic/create'     , ['as' => 'basic.create' , 'uses' => 'BasicController@create']);   //新增基本資料表單
Route::post     ('basic'            , ['as' => 'basic.store'  , 'uses' => 'BasicController@store']);    //新增使用者資料到資料庫
Route::get      ('basic/{id}/edit'  , ['as' => 'basic.edit'   , 'uses' => 'BasicController@edit']);     //編輯某個使用者的基本資料
Route::patch    ('basic/{id}'       , ['as' => 'basic.update' , 'uses' => 'BasicController@update']);   //更新某一個使用者的資料
Route::delete   ('basic/{id}'       , ['as' => 'basic.destroy', 'uses' => 'BasicController@destroy']);  //刪除某一個使用者的資料
// 第二區塊：工作/社團經驗
Route::get('workExperience/create','WorkExperienceController@create');
Route::post('workExperience/create','WorkExperienceController@store');
// 第三區塊：教學/志工服務經驗
Route::get('teachExperience/create','TeachExperienceController@create');
Route::post('teachExperience/create','TeachExperienceController@store');
// 第四區塊：Teach for Taiwan教師計畫簡答題 （小菜）
Route::get      ('essay/create'     , ['as' => 'essay.create' , 'uses' => 'EssayController@create']);   //新增基本資料表單);
Route::post     ('essay'            , ['as' => 'essay.store'  , 'uses' => 'EssayController@store']);    //新增使用者資料到資料庫
// 第五區塊：附件區
Route::get('appendix/create','AppendixController@create');
Route::post('appendix/create','AppendixController@store');
// 第六區塊：串金流歐付寶
Route::get('paymentList', ['middleware' => 'auth', 'uses' => 'PaymentController@showPaymentList']);   //Display payment list
Route::post('paymentResult', 'PaymentController@showPaymentResult');   //Display payment result
// 資料預覽頁面
Route::get('preview','PreviewController@index');
// 感謝頁面


// ------- 後台 -------

Route::get('logout', function(){

    Auth::logout();
    return Redirect::to('/');
});


// Route::get('mail_test', function()
// {
//     // 傳送給郵件view的變數資料
//     $template_data = array(
//         'name'=> 'Tako'
//     );
//     // 收件者資料
//     $userinfo = array(
//         'email'=>'nfs1atako@gmail.com',
//         'subject'=>'歡迎使用 Laravel Mail!'
//     );
//     // 寄送郵件，使用use方法將資料從外部傳送給匿名函式使用
//     Mail::send('emails.test', $template_data, function($message) use ($userinfo)
//     {
//         $message->to('yianccc@gmail.com')->subject('歡迎使用 Laravel Mail!');
//     });
//     echo '完成寄送!!';
// });

