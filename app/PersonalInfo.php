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
		'DOB'  => 'required|date',
		'WeChat' => 'string',
		"parent1" => 'string',
		"parent2" => 'string',
		'highSchool' => 'string',
		'SAT' => 'integer',
		'ACT' => 'integer',
		'TOEFL' => 'integer',
		'GPA' => 'numeric',
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
 		$this->attributes['name'] = strip_tags($value['name']);
 		$this->attributes['preferred_name'] = strip_tags($value['preferred_name']);
        $this->attributes['profile_img'] = strip_tags($value['profile_img']);
        $this->attributes['parent1'] = strip_tags($value['parent1']);
 		$this->attributes['parent2'] = strip_tags($value['parent2']);
 		$this->attributes['highSchool'] = strip_tags($value['highSchool']);
 		$this->attributes['SAT'] = strip_tags($value['SAT']);
 		$this->attributes['ACT'] = strip_tags($value['ACT']);
 		$this->attributes['TOEFL'] = strip_tags($value['TOEFL']);
 		$this->attributes['GPA'] = strip_tags($value['GPA']);
 		$this->attributes['major1'] = strip_tags($value['major1']);
 		$this->attributes['major2'] = strip_tags($value['major2']);
 		$this->attributes['major3'] = strip_tags($value['major3']);

 	}

 	public function user()
 	{
 		return $this->belongsTo(User::class, 'id', 'profile_img');
 	}


}
