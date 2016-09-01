<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index(){
        return view('home');
    }

    public function studentProfile(){
        return view('users.student');
    }
    public function counselorProfile(){
        return view('users.counselor');
    }

    public function login(){
        return view('auth.login');
    }
    public function register(){
        return view('auth.registration');
    }
    public function mySchools(){
        return view('schools.mySchools');
    }
    public function myStudents(){
        return view('schools.myStudents');
    }
    public function profile(){
        return view('auth.profile');
    }
    public function search(){
        return view('schools.search');
    }
    public function activities(){
        return view('schools.activities');
    }



}