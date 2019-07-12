<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Master extends Model
{
    public function services()
    {
    	return $this->belongsToMany('App\Service');
    }
}