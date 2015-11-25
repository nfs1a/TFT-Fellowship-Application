<?php

Route::pattern('id', '[0-9]+'); //規定ID格式

Route::get('dashboard','PagesController@dashboard');
Route::get('/','PagesController@dashboard');

Route::get      ('basic'            , ['as' => 'basic.index'  , 'uses' => 'BasicController@index']);    //顯示所有列表
Route::get      ('basic/{id}'       , ['as' => 'basic.show'   , 'uses' => 'BasicController@show']);     //顯示某個人的資料
Route::get      ('basic/create'     , ['as' => 'basic.create' , 'uses' => 'BasicController@create']);   //新增基本資料表單
Route::post     ('basic'            , ['as' => 'basic.store'  , 'uses' => 'BasicController@store']);    //新增使用者資料到資料庫
Route::get      ('basic/{id}/edit'  , ['as' => 'basic.edit'   , 'uses' => 'BasicController@edit']);     //編輯某個使用者的基本資料
Route::patch    ('basic/{id}'       , ['as' => 'basic.update' , 'uses' => 'BasicController@update']);   //更新某一個使用者的資料
Route::delete   ('basic/{id}'       , ['as' => 'basic.destroy', 'uses' => 'BasicController@destroy']);  //刪除某一個使用者的資料

Route::get('mail_test', function()
{
    // 傳送給郵件view的變數資料
    $template_data = array(
        'name'=> 'Tako'
    );
    // 收件者資料
    $userinfo = array(
        'email'=>'nfs1atako@gmail.com',
        'subject'=>'歡迎使用 Laravel Mail!'
    );
    // 寄送郵件，使用use方法將資料從外部傳送給匿名函式使用
    Mail::send('emails.test', $template_data, function($message) use ($userinfo)
    {
        $message->to('yianccc@gmail.com')->subject('歡迎使用 Laravel Mail!');
    });
    echo '完成寄送!!';
});

