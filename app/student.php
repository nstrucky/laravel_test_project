<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    //

    protected $guarded = [];

    public function assignments() {
    	return $this->hasMany(Assignment::class);
    }
}
