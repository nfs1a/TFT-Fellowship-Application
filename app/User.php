<?php

namespace App;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Foundation\Auth\Access\Authorizable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

class User extends Model implements AuthenticatableContract,
                                    AuthorizableContract,
                                    CanResetPasswordContract
{
    use Authenticatable, Authorizable, CanResetPassword;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'users';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['email', 'password', 'facebook_id'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = ['password', 'remember_token', 'facebook_id'];


    // 一對一
    // hasOne(Progress)
    // hasOne(Basic)
    // hasOne(Work)
    // hasOne(Teach)
    // hasOne(Essay)
    // hasOne(Appendix)

    public function progress()
    {
        return $this->hasOne('App\Progress');
    }
    public function basic()
    {
        return $this->hasOne('App\Basic');
    }
    public function work()
    {
        return $this->hasOne('App\Work');
    }
    public function teach()
    {
        return $this->hasOne('App\Teach');
    }
    public function essay()
    {
        return $this->hasOne('App\Essay');
    }
    public function appendix()
    {
        return $this->hasOne('App\Appendix');
    }



}
