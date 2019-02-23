<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    public function entry()
    {
        return $this->belongsTo('app\Entry');
    }
}
