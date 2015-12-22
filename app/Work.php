<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class Work extends Model
{
    // 多對一: 一個檔案可能來自「一個」使用者
    public function user()
    {
        return $this->belongsTo('App\User');
    }
    public function workExperiences()
    {
        return $this->hasMany('App\WorkExperience');
    }
    public function expertises()
    {
        return $this->hasMany('App\Expertise');
    }
}