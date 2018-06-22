<?php

namespace App;

use App\Traits\Uuid;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use Uuid;

    public $incrementing = false;
    
    protected $fillable = [
        'id',
        'first_name',
        'last_name',
        'email',
        'password',
        'avatar',
        'gender',
        'birthday',
        'description',
        'institution',
        'address',
        'contact',
        'block'
    ];

    public function events()
    {
        return $this->hasMany('App\Event');
    }

    public function followings()
    {
        return $this->hasMany('App\Following');
    }

    public function followers()
    {
        return $this->hasMany('App\Follower');
    }

    public function loves()
    {
        return $this->hasMany('App\Love');
    }

    public function verifyUser()
    {
        return $this->hasOne('App\VerifyUser');
    }
}
