<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $table = "students";

    protected $fillable = ['user_id', 'school_id'];

    public function schools() {
        return $this->belongsTo('App\Student');
    }





}



