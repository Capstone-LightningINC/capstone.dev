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

        for ($i=0; $i < 10; $i++) { 

            $personalInfo = new App\PersonalInfo();
            $personalInfo->student_id = $i + 1;
            $personalInfo->DOB = "2000-01-01";
            $personalInfo->WeChat = "WeChat".$i;
            $personalInfo->profile_img = '/img/uploads/avatar'.$i;
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
	}
}
