<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class Basic extends Model
{
    // 多對一: 一個檔案可能來自「一個」使用者
    public function user()
    {
        return $this->belongsTo('App\User');
    }
    public function eduHistorys()
    {
        return $this->hasMany('App\EduHistory');
    }
}