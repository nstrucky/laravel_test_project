<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use \App\Assignment;

class AssignmentTask extends Model
{
    protected $guarded = [];

    public function assignment() {
    	return $this->belongsTo(Assignment::class);
    }
}
