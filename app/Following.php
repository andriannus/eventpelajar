<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Following extends Model
{
    protected $fillable = [
        'id', 'id_user_1', 'id_user_2'
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
