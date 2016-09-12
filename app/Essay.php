<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Essay extends Model
{
      public static $rules = [
        "school_id" => "numeric|required",
        "topic" => "string|required",
        "essay" => "required",
        "deadline" => "date|required"
   ];

   public function school() 
   {
   		return $this->belongsTo('App\School', 'school_id', 'school_id');
   }

   public function topicName()
   {	
   		$columnName = "topic" . $this->topic;
   		return $this->school->$columnName;
   }

}
