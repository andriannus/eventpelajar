<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Love extends Model
{   
    protected $fillable = [
    	'id', 'id_event', 'id_user'
    ];

    public function event()
    {
        return $this->belongsTo('App\Event');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
