<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class TeachExperience extends Model
{
    // 多對一: 一個檔案可能來自「一個」使用者
    public function teach()
    {
        return $this->belongsTo('App\Teach');
    }
}