<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator,Redirect,response;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Session;

class AuthController extends Controller
{
    public function index()
    {
        return view('login');
    }
    public function register()
    {
        return view('login');
    }
    public function postlogin(Request $request)

    {
        // dd($request);
        request()->validate([
               'email'=>'required', 
               'password'=>'required', 
        ]);
        $credential= $request->only('email','password');
        if(Auth::attempt($credential))
        {
            return redirect()->intended('/')->with('msg','My Account');
        }   return Redirect::to('login')->with('attention','Invalid Email or Password');
    }
    public function postregister(Request $request)
    {
        request()->validate([
               'name'=>'required', 
               'email'=>'required|email|unique:users', 
               'password'=>'required|min:6', 
        ]);
        
        $data = $request->all();
        $check = $this->create($data);

        return Redirect::to('/')->with('msg','You are registered');
    }
    public function create(array $data)
    {
        return User::create([
            'name'=>$data['name'],
            'email'=>$data['email'],
            'password'=>Hash::make($data['password']),
        ]);
    }
    public function logout()
    {
        Session::flush();
        Auth::logout();
        return Redirect::to('login');
    }
    
}