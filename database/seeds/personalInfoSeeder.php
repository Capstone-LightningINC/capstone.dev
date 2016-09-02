<?php

use Illuminate\Database\Seeder;

class personalInfoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i <= 3; $i++) { 

            $personalInfo = new App\PersonalInfo();
           	$personalInfo->student_id = $i+1;
            $personalInfo->DOB = "01-01-2000";
            $personalInfo->photo = 'img/uploads/avatar'.$i;
            $personalInfo->WeChat = "WeChat".$i;
            $personalInfo->parent1 = 'Joe Parent';
            $personalInfo->parent2 = 'Joanna Parent';
            $personalInfo->highSchool = 'Jefferson High School';
            $personalInfo->SAT = 2400;
            $personalInfo->ACT = 36;
            $personalInfo->TOEFL = 120;
            $personalInfo->GPA = 4.0;
            $personalInfo->major1 = 'computer science';
            $personalInfo->major2 = 'engineering';
            $personalInfo->major3 = 'biology';
            $personalInfo->save();
        }

        for ($i=0; $i <= 4; $i++) {
        	$personalInfo = new App\PersonalInfo();
        	$personalInfo->student_id = $i+4;
        	$personalInfo->DOB = "02-02-2002";
            $personalInfo->photo = 'img/uploads/avatar'.$i;
            $personalInfo->parent1 = 'Jane Doe';
            $personalInfo->highSchool = 'Washington High School';
            $personalInfo->SAT = 2000;
            $personalInfo->TOEFL = 90;
            $personalInfo->GPA = 3.7;
            $personalInfo->major1 = 'communications';
            $personalInfo->major2 = 'art';
            $personalInfo->save();
    	}

    	for ($i=0; $i <= 3; $i++) {
 			$personalInfo = new App\PersonalInfo();
 			$personalInfo->student_id = $i+8;
        	$personalInfo->DOB = "03-03-2003";
            $personalInfo->photo = 'img/uploads/avatar'.$i;
            $personalInfo->highSchool = 'Franklin High School';
            $personalInfo->ACT = 21;
            $personalInfo->GPA = 3.5;
            $personalInfo->major1 = 'music';
            $personalInfo->save();
    	}
	}
}
