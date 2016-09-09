<?php
namespace App\Http\Controllers;

use App\Event;
use App\Student;
use DateTime;
use Illuminate\Http\Request;
use App\User;
use App\School;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Calendar;
use MaddHatter\LaravelFullcalendar\SimpleEvent;
use App\Activities;

class HomeController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth', ['except' => 'index']);
    }

    public function index(){
        return view('home');
    }


        //    DASHBOARDS   //
    public function studentProfile(){
        $events = [];

        $event = new Event();
        $event->title =  'Event One'; //event title
        $event->all_day = false; //full day event?
        $event->start = '2016-09-11 00:00:00'; //start time (you can also use Carbon instead of DateTime)
        $event->end = '2016-09-12 00:00:00'; //end time (you can also use Carbon instead of DateTime)
        $event->save();

        $events[] = Calendar::event(
            "Valentine's Day", //event title
            true, //full day event?
            new DateTime('2015-02-14'), //start time (you can also use Carbon instead of DateTime)
            new DateTime('2015-02-14'), //end time (you can also use Carbon instead of DateTime)
            'stringEventId' //optionally, you can specify an event ID
        );

        //$eloquentEvent = SimpleEvent::first(); //EventModel implements MaddHatter\LaravelFullcalendar\Event


        $calendar = \Calendar::addEvents($events) //add an array with addEvents
        ->addEvent($event, [ //set custom color fo this event
            'color' => '#800',
        ])->setOptions([ //set fullcalendar options
            'firstDay' => 1
        ])->setCallbacks([ //set fullcalendar callback options (will not be JSON encoded)
            'viewRender' => 'function() {alert("Callbacks!");}'
        ]);

        return view('dashboards.student', compact('calendar'));
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
        $user = Auth::user();
        if (is_null($user->personalInfo)) {
            return view('auth.profileBlank', ['user' => $user]);
        }
        return view('auth.profile', ["user" => $user]);
    }
    public function editProfile($id) {
        $user = Auth::user();
        return view('auth.editProfile', ['user' => $user]);
    }

    public function search(Request $request){
        $keyword = $request->input('keyword');
        $schools = School::SearchByKeyword($keyword);
        $schools = $schools->paginate(10);
        return view('schools.search', ['schools' => $schools]);
    }
    public function school($id){

        $school = School::find($id);
        return view('schools.school', ["school" => $school]);
    }
    public function activities(){
        $activities = Activities::all();
        return view('schools.activities', ['activities' => $activities]);
    }



            //    TASKS   //
    public function myStudents(){
        $myStudents = User::where('authority', 'student')->where('counselor_name', Auth::user()->name)->get();
        return view('tasks.myStudents', ['students' => $myStudents]);
    }
    public function showStudent($id){
        $studentInfo = User::find($id);
        return view('tasks.studentInfo', ["student" => $studentInfo]);
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
    public function createTasks(){
        return view('tasks.createTasks');
    }
}