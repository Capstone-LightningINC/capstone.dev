<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Post;
use Illuminate\Support\Facades\DB;

class PersonalInfo extends Model
{
    protected $table = 'personalInfo';
    protected $dates = ['created_at', 'updated_at'];

    public static $rules = [
		'name' => 'required|string',
		'preferred_name' => 'required|string',
		'DOB'  => 'required|date',
		'WeChat' => 'string',
		"parent1" => 'string',
		"parent2" => 'string',
		'highSchool' => 'required|string',
		'SAT' => 'integer',
		'ACT' => 'integer',
		'TOEFL' => 'integer',
		'GPA' => 'float',
		'major1' => 'string',
		'major2' => 'string',
		'major3' => 'string'

    ];

    protected function formatValidationErrors(Validator $validator)
 	{
 		return $validator->errors()->all();
 	}
 	public function setInfo($value) 
 	{
 		$this->attributes['name'] = strip_tags($value);
 		$this->attributes['preferred_name'] = strip_tags($value);
 		$this->attributes['parent1'] = strip_tags($value);
 		$this->attributes['parent2'] = strip_tags($value);
 		$this->attributes['highSchool'] = strip_tags($value);
 		$this->attributes['SAT'] = strip_tags($value);
 		$this->attributes['ACT'] = strip_tags($value);
 		$this->attributes['TOEFL'] = strip_tags($value);
 		$this->attributes['GPA'] = strip_tags($value);
 		$this->attributes['major1'] = strip_tags($value);
 		$this->attributes['major2'] = strip_tags($value);
 		$this->attributes['major3'] = strip_tags($value);

 	}

 	public function user()
 	{
 		return $this->belongsTo(User::class, 'id');
 	}


}
