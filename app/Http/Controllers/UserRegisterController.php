<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserRegisterController extends Controller{
    public function index(){
        return view('user.register');
    }

    public function register(){
        $this->validate(request(),[
            'username' => 'required|alpha_dash',
            'email' => 'required|unique:users,email',
            'password' => 'required|confirmed',
            'fname' => 'required',
            'lname' => 'required',
            'phone' => 'required',
            'location' => 'required',
            'gender' => 'required'
        ]);

        User::create([
                'username' => request('username'),
                'email' => request('email'),
                'password' => bcrypt(request('password')),
                'fname' => request('fname'),
                'lname' => request('lname'),
                'phone' => request('phone'),
                'location' => request('location'),
                'gender' => request('gender')
        ]);

        return 'registered';
    }
}
