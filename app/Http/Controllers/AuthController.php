<?php

namespace App\Http\Controllers;

use App\Models\User;
use Auth;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function showregister(){
        return view('auth.register');
    }
    public function showlogin(){
        return view('auth.login');
    }

    public function register(Request $request){
        $request->validate([
            'name'=>'required',
            'email'=>'required|email|unique:users,email',
            'password'=>'required|min:5|confirmed'
        ]);
        User::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>$request->password,
        ]);
        return redirect()->route('show.login');
    }

    public function login(Request $request){
        $credentials=$request->validate([
           
            'email'=>'required|email',
            'password'=>'required'
        ]);

        if(Auth::attempt($credentials)){
            $user=Auth::user();
            if($user->isAdmin()){
               return redirect()->route('dashboard.admin');
            }elseif($user->isTeacher()){
               return redirect()->route('dashboard.teacher');  
            }else{
                return redirect()->route('dashboard.user');
            }
           
        }
         return redirect()->back();
    }


    public function logout(){
        Auth::logout();
        return redirect()->route('show.login');
    }
}
