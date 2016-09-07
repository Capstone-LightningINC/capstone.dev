<?php

namespace App\Http\Controllers\Auth;

use App\User;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;

class AuthController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Registration & Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users, as well as the
    | authentication of existing users. By default, this controller uses
    | a simple trait to add these behaviors. Why don't you explore it?
    |
    */

    use AuthenticatesAndRegistersUsers, ThrottlesLogins;
    protected $redirectAfterLogout = '/';
    protected $redirectTo = '/profile/{id}';
    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest', ['except' => 'getLogout']);
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|confirmed|min:6',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        $user = User::create([
            'name' => $data['name'],
            'preferred_name' => $data['preferred_name'],
            'email' => $data['email'],
            'gender' => $data['gender'],
            'password' => bcrypt($data['password']),
            'phone' => $data['phone'],
            'company' => $data['company'],
            'authority' => $data['authority'],
            'counselor_name' => $data['counselor_name'],
        ]);
        $profile = new \App\PersonalInfo;
        $profile->student_id = $user->id;
        $profile->DOB = $data['DOB'];
        $profile->save();

        return $user;
    }

    // protected function authenticated($user)
    // {

    //     if ($user->authority == 'student') {
    //         return redirect('/profile/{id}');
    //     } elseif ($user->authority == 'counselor') {
    //         return redirect('/counselor');
    //     }

        
    // }


}
