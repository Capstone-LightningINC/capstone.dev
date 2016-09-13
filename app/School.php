<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class School extends Model
{
    

    protected $table = 'schools';

    public $primaryKey = 'school_id';
    protected $dates = ['created_at', 'updated_at'];
 
   public static $rules = [
        
 
 
   ];

    public function schoolInfo()

    {
        return $this->hasOne(schoolInfo::class, 'student_id');
    }

    public static function searchByKeyword($keyword)
    {
        if ($keyword!='') {
            $schools = self::where("biz_name", "LIKE","%$keyword%")
                ->orWhere("e_city", "LIKE", "%$keyword%")
                ->orWhere("e_state", "LIKE", "%$keyword%")
                ->orWhere("c_type", "LIKE", "%$keyword%");
        } else {
            $schools = DB::table('schools');
        }
        return $schools;
    }
    public function users(){

        return $this->belongsToMany('App\User', 'students', 'user_id', 'school_id');
    }

    public static function getTopic($value) 
    {

    }

    public static function setTopic($value)
    {

    }
    public function essay()
    {
        return $this->hasMany('App\Essay', 'school_id','school_id');
    }
}
