<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class WorkExperience extends Model
{
    // 多對一: 一個檔案可能來自「一個」使用者
    public function work()
    {
        return $this->belongsTo('App\Work');
    }
}