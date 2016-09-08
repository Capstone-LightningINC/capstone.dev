<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Schools;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class UsersController extends Controller
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
        // $this->validate($request, Post::$rules);
        // $user = new App\user();
        // $user->id = Auth::user()->id;
        // return $this->validateAndSave($post, $request);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
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
        //
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
        //
    }
    
    public function validateAndSave(Request $request) 
    {
       
        $request->session()->flash('ERROR_MESSAGE', 'Update not saved');
        $this->validate($request, Schools::$rules);
        $request->session()->forget('ERROR_MESSAGE');

        $user = Auth::user();

        $user->name = $request->input('name');
        $user->preferred_name = $request->input('preferred_name');
        $user->gender = $request->input('gender');
        $user->email = $request->input('email');
        if($request->has('password')) {
            $user->password = $request->input('password');
        }
        $user->phone = $request->input('phone');
        $user->save();

        $request->session()->flash(
            'SUCCESS_MESSAGE', 'Update saved');
        return redirect()->action('HomeController@profile');
    }
}
