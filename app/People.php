<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class People extends Model
{
    public function role() {
    	return $this->belongsTo('App\Role');
    }
}
