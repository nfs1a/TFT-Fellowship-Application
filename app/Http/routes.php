<?php

Route::pattern('id', '[0-9]+'); // 規定ID格式

// ------- 前台 -------
// 首頁
Route::get ('/','ApplyLicenseController@index');
// 申請須知
Route::get ('applyLicense','ApplyLicenseController@index');
// dashboard
Route::get ('dashboard','PagesController@dashboard');
// 第一區塊：基本資料
Route::get ('basic/create', [ 'middleware' => 'auth', 'as' => 'basic.create' , 'uses' => 'BasicController@create']);   //新增基本資料表單
Route::post('basic', [ 'middleware' => 'auth', 'as' => 'basic.store'  , 'uses' => 'BasicController@store']);    //新增使用者資料到資料庫
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
// 資料預覽頁面
Route::get ('preview', [ 'middleware' => 'auth', 'uses' => 'PreviewController@index' ]);
Route::get ('api/preview', [ 'middleware' => 'auth', 'uses' => 'PreviewController@indexApi' ]);
// 感謝頁面


Route::get('logout', function(){
    Auth::logout();
    return Redirect::to('/');
});


