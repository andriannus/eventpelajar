<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VerifyUser extends Model
{
    protected $fillable = [
    	'id_user', 'token', 'verified'
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
