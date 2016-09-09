<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Student;

class SchoolsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index', 'show']]);
    }
    
    public function index()
    {
        $searchQuery = $request->input('search');
        if(!is_null($searchQuery)) {
            $school = School::searchSchools($searchQuery)->orderBy('e_state', 'DESC')->paginate(10);
        }else {
            $school = School::with('user')->orderBy('e_state', 'DESC')->paginate(10);
        }

        $data = compact('searchQuery', 'posts');
        return view('schools.index')->with($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('schools.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, School::$rules);
        $school = new School();
        $school->created_by = Auth::user()->id;
        Log::info($request->all());
        return $this->validateAndSave($school, $request);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $school = School::with('user')->findOrFail($id);
        if ($request->user()) {
            $user_add = $school->user_add($request->user());
        } else {
            $$user_add = null;
        }

        $data = compact('school', 'user_add');
        return view('school.show')->with($data);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $schools = School::findOrFail($id);
        return view('schools.edit')->with('schools', $school);
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
        $schools = School::findOrFail($id);
        return $this->validateAndSave($school, $request);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($school_id)
    {
        $school = School::find($school_id);
        if(!$school) {
            session()->flash('message', 'School does not exist');
        } else {
            $school->delete();
            session()->flash('message', 'School deleted');
            return redirect()->action('SchoolsController@index');
        }
    }

    public function search(Post $schools, Request $request) 
    {
        $searchQuery = $request->input('search');
        if ($searchQuery) {
            $schools = School::searchSchools($searchQuery);
        }
        return view('schools.searchQuery', ['search' => $searchQuery]);
    }

    private function validateAndSave(Post $school, Request $request)
    {
        $request->session()->flash('ERROR_MESSAGE', 'Update not saved');
        $this->validate($request, School::$rules);
        $request->session()->forget('ERROR_MESSAGE');

        $school->biz_name = $request->input('biz_name');
        $school->biz_info = $request->input('biz_info');
        $school->e_address = $request->input('e_address');
        $school->e_city = $request->input('e_city');
        $school->e_state = $request->input('e_state');
        $school->e_postal = $request->input('e_postal');
        $school->e_country = $request->input('e_country');
        $school->loc_TZ = $request->input('loc_TZ');
        $school->biz_phone = $request->input('biz_phone');
        $school->biz_fax = $request->input('biz_fax');
        $school->biz_email = $request->input('biz_email');
        $school->web_url = $request->input('web_url');
        $school->c_type = $request->input('c_type');
        $school->c_setting = $request->input('c_setting');
        $school->c_housing = $request->input('c_housing');
        $school->c_pop = $request->input('c_pop');
        $school->c_ratio = $request->input('c_ratio');
        $school->save();

        $request->session()->flash(
            'SUCCESS_MESSAGE', 'Update saved');
        return redirect()->action('SchoolsController@index');
    }

    public function addToMySchools($school_id) {
//        dd($school_id);
        $mySchools = Student::with('school')->firstOrCreate([
          'user_id' => Auth::user()->id,
            'school_id' => $school_id,
            ]);

        $school = $mySchools->school;
        return redirect()->back();
    }

    public function displayMySchools() {
        $mySchools = Auth::user()->mySchools;
//        $mySchools = $mySchools->paginate(10);
        return view('schools.myschools', ['schools' => $mySchools]);
    }

    public function deleteMySchools($id){
        $mySchool = Student::where('school_id', $id)->where('user_id', Auth::user()->id);
        $mySchool->delete();
        return redirect()->back();
    }


}





