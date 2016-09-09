<?php

namespace App;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Foundation\Auth\Access\Authorizable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

class User extends Model implements AuthenticatableContract,
    AuthorizableContract,
    CanResetPasswordContract
{
    use Authenticatable, Authorizable, CanResetPassword;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'users';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'preferred_name', 'email', 'password', 'phone', 'authority', 'counselor_name', 'company', 'gender', 'DOB', 'parent1', 'parent2', 'high_school', 'SAT', 'ACT', 'TOEFL', 'GPA', 'major1', 'major2', 'major3'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = ['password', 'remember_token'];

    public function personalInfo()
    {
        return $this->hasOne(PersonalInfo::class, 'student_id');
    }
    public function mySchools(){

        return $this->belongsToMany('App\School', 'students', 'user_id', 'school_id');

    }
//    public static function gatherMyStudents()
//    {
//            $myStudents = self::where("counselor", "LIKE","%$keyword%")
//                ->orWhere("e_city", "LIKE", "%$keyword%")
//                ->orWhere("e_state", "LIKE", "%$keyword%")
//                ->orWhere("c_type", "LIKE", "%$keyword%");
//        } else {
//            $schools = DB::table('schools');
//        }
//        return $schools;
//    }

}
