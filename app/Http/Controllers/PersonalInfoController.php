<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\personalInfo;
use App\Http\Requests;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;

class PersonalInfoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct() 
    {
        $this->middleware('auth');
    }

    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('personalInfo.profile');
        
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
        $personalInfo = new App\personalInfo();
        $personalInfo->student_id = Auth::user()->id;
        return $this->validateAndSave($post, $request);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, $id)
    {

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
        return view('HomeController@editProfile');
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
        $personalInfo = personalInfo::findOrFail($id);
        return $this->validateAndSave($personalInfo, $request);
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
    public function validateAndSave(Request $request) 
    {
        $request->session()->flash('ERROR_MESSAGE', 'Update not saved');
        $this->validate($request, personalInfo::$rules);
        $request->session()->forget('ERROR_MESSAGE');

        $personalInfo = Auth::user()->personalInfo;

        $personalInfo->DOB = $request->input('DOB');
        $personalInfo->photo = $request->input('photo');
        $personalInfo->WeChat = $request->input('WeChat');
        $personalInfo->parent1 = $request->input('parent1');
        $personalInfo->parent2 = $request->input('parent2');
        $personalInfo->highSchool = $request->input('highSchool');
        $personalInfo->SAT = $request->input('SAT');
        $personalInfo->ACT = $request->input('ACT');
        $personalInfo->TOEFL = $request->input('TOEFL');
        $personalInfo->GPA = $request->input('GPA');
        $personalInfo->major1 = $request->input('major1');
        $personalInfo->major2 = $request->input('major2');
        $personalInfo->major3 = $request->input('major3');
        $personalInfo->save();

        $request->session()->flash(
            'SUCCESS_MESSAGE', 'Update saved');
        return redirect()->action('HomeController@profile');
    }
}