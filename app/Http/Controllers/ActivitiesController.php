<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Activities;
use App\User;
use App\Http\Requests;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;


class ActivitiesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('student');
    }
    public function activities()
    {
        $activities = Activities::all();
        return view('schools.activities', ['activities' => $activities]);
    }
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, Post::$rules);
        $activity = new App\Activities();
        $activity->student_id = Auth::user()->id;
        return $this->validateAndSave($post, $request);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $activity = Activities::findOrFail($id);

        return view('ActivitiesController@activities');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $activity = Post::find($id);
        if (!$activity) {
            session()->flash('message', 'Activity not found');
        } else {
            $activity->delete();
            session()->flash('message', 'Activity deleted!');
            return redirect()->action('');
        }
    }

    public function validateAndSave(Request $request) 
    {
        $request->session()->flash('ERROR_MESSAGE', 'Update not saved');
        $this->validate($request, Activities::$rules);
        $request->session()->forget('ERROR_MESSAGE');

        $activity = Auth::user()->activity;
        $activity->name = $request->input('name');
        $activity->position = $request->input('position');
        $activity->type = $request->input('type');
        $activity->description = $request->input('description');
        $activity->save();

        $request->session()->flash(
            'SUCCESS_MESSAGE', 'Update saved');
        return redirect()->action('ActivitiesController@activities');
    }

    public function editMyActivities() 
    {
        $activities = Activities::all();
      
        return view('schools.showActivities', ['activities' => $activities]);
    }

    public function addToMyActivities(Request $request) 
    {
        $myActivities = Activities::with('activity')->firstOrCreate([
            'student_id' => Auth::user()->id,
            'name' => $request->input('name'),
            'position' => $request->input('position'),
            'type' => $request->input('type'),
            'description' => $request->input('description'),
    ]);

//        $request = $myActivities->school;
        return redirect()->back();
    }

    public function deleteMyActivities($school_id)
    {
        $activity = Activities::find($school_id);
        $activity->delete();
        return redirect()->back();
    }


}
