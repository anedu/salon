<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    public function masters()
    {
        return $this->belongsToMany('App\Master');
    }
}
