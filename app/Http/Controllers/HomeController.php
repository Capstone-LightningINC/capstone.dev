<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\User;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index(){
        return view('home');
    }


        //    DASHBOARDS   //
    public function studentProfile(){
        return view('dashboards.student');
    }
    public function counselorProfile(){
        return view('dashboards.counselor');
    }


         //    AUTHORIZE   //
    public function login(){
        return view('auth.login');
    }
    public function register(){
        return view('auth.registration');
    }


            //    SCHOOLS   //
    public function mySchools(){
        return view('schools.mySchools');
    }
    public function profile($id){

        //$date = new \DateTime($request->input('dob'));
        //$user->dob = $date->format('Y-m-d');

        $user = Auth::user();//User::find($id);
        // dd($user);
        if (is_null($user->personalInfo)) {//dd($user);
            return view('auth.profileBlank', ['user' => $user]);
        }
        return view('auth.profile', ["user" => $user]);
    }
    public function search(){
        return view('schools.search');
    }
    public function activities(){
        return view('schools.activities');
    }



            //    TASKS   //
    public function myStudents(){
        return view('tasks.myStudents');
    }
    public function studentTasks(){
        return view('tasks.studentTasks');
    }
    public function writeAnEssay(){
        return view('tasks.writeAnEssay');
    }
    public function myEssays(){
        return view('tasks.myEssays');
    }

}