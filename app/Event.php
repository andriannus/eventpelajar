<?php

namespace App;

use App\Traits\Uuid;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use Uuid;

    public $incrementing = false;
    
    protected $fillable = [
    	'id', 'title', 'category', 'picture', 'description', 'contact', 'link', 'id_user'
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function loves()
    {
        return $this->hasMany('App\Love');
    }
}
