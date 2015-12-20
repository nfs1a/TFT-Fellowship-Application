<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class EduHistory extends Model
{
    protected $table = 'eduHistories';	

    // 多對一: 一個檔案可能來自「一個」使用者
    public function basic()
    {
        return $this->belongsTo('App\Basic');
    }
}