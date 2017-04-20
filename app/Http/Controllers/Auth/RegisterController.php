<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
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
            'first_name' => 'required|string|max:50',
            'last_name' => 'required|string|max:50',
            'email' => 'required|string|email|max:255|unique:users',
            'username' => 'required|alpha_dash|max:50|unique:users',
            'password' => 'required|string|min:6|confirmed',
            'phone_number' => 'required|max:50',
            'height_inches' => 'required|between:0,1000',
            'vertical_stack' => 'required',
            'horizontal_stack' => 'required',
            'zone' => 'required'
        ], User::$messages);
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
            'username' => $data['username'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
            'is_admin' => false
        ]);
        $user->player()->create([
            'first_name' => $data['first_name'],
            'last_name' => $data['last_name'],
            'phone_number' => $data['phone_number'],
            'height_inches'=> $data['height_inches'],
            'gender_code' => $data['gender_code'],
            'experience' => $data['experience'],
            'preferred_position' => $data['preferred_position'],
            'vertical_stack'=> $data['vertical_stack'],
            'horizontal_stack'=> $data['horizontal_stack'],
            'zone'=> $data['zone'],

        ]);

        return $user;
    }
}
