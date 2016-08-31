<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

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
}