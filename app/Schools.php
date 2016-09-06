<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Schools extends Model
{
    protected $tables = 'schools';
    protected $dates = ['created_at', 'updated_at'];

    public static $rules = [



    ];

    protected function formatValidationErrors(Validator $validator)
    {
    	return $validator->errors()->all;
    }
    public function user()
    {
    	return $this->belongsTo(User::class, 'id');
    }
    public static function searchBySchoolName($searchQuery)
    {
    	return static::join('users', 'users.id', '=', 'schools.school_id')->where('school.biz_name', 'LIKE', '%{$searchQuery}%')->orWhere('schools.e_city', 'LIKE', '%{$searchQuery}%')->select('*', 'school.school_id as id')->take(5)->get();
    }


}
