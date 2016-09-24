<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Activities extends Model
{
    protected $table = "activities";

    protected $fillable = ['student_id', 'name', 'position', 'type', 'description'];

    public static $rules = [
		'name'  => 'required|string',
		'position' => 'required|string',
		'type' => 'required|string',
		'description' => 'required|string'
    ];

    protected function formatValidationErrors(Validator $validator)
 	{
 		return $validator->errors()->all();
 	}

    public function setInfo($value) 
 	{
 		$this->attributes['name'] = strip_tags($value['name']);
 		$this->attributes['position'] = strip_tags($value['position']);
 	}

 	public function activities() {
        return $this->belongsTo('App\activities');
    }

}
