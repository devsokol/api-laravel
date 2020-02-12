<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $guarded = [];

    public function people() {
    	return $this->hasMany('App\People');
    }
}
