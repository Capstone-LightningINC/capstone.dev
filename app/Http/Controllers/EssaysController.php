<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\School;
use App\Essay;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Auth;

class EssaysController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     public function __construct()
    {
        $this->middleware('auth');
        // $this->middleware('counselor');
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
        return view('writeAnEssay.profile');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $essay = new Essay();


        return $this->validateAndSave($essay, $request);
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
        $personalInfo = personalInfo::findOrFail($id);
        return view('EssayController@editEssay');
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
        $essay = essay::findOrFail($id);
        return $this->validateAndSave($essay, $request);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function topics($schoolId)
    {
        $school = School::find($schoolId);

        return view('tasks.topics')->with('school', $school);
    }

    public function validateAndSave(Essay $essay, Request $request)
    {
        $request->session()->flash('ERROR_MESSAGE', 'Essay not saved');
        $this->validate($request, Essay::$rules);
        $request->session()->forget('ERROR_MESSAGE');

        
        $essay->student_id = Auth::user()->id;
        $essay->school_id = $request->school_id;
        $essay->topic = $request->topic;
        $essay->essay = $request->essay;
        $essay->deadline = $request->deadline;
        $essay->save();

        return redirect()->action("HomeController@myEssays");
    }
}
