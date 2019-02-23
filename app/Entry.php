<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Entry extends Model
{
    protected $table = 'entries';

    public function activities()
    {
        return $this->hasMany('app\Activity');
    }

    public function user()
    {
        return $this->belongsTo('app\User');
    }
}
