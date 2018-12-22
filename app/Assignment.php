<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use \App\AssignmentTask;

class Assignment extends Model
{
    protected $guarded = [];

    public function student() {
    	return $this->belongsTo(Student::class);
    }

    public function tasks() {
    	return $this->hasMany(AssignmentTask::class);
    }

    public function addTask($validAttrs) {
    	$this->tasks()->create($validAttrs);
    }
    
}
