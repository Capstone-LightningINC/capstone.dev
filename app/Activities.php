<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Activities extends Model
{
    protected $table = "activities";

    protected $fillable = ['student_id', 'name', 'position', 'type', 'description'];

    public function activities() {
        return $this->belongsTo('App\activities');
    }

}
