<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function register(Request $request){
        // return('test');
        $request->validate([
            'name'=>'required', 
            'email' => 'required|email',
            'password' => 'required',
            'confirm-password' => 'required',
        ]);

        $request['password'] = Hash::make($request['password']);
        User::create($request->all());
        // dd($data);  
        return redirect('/')->with('regis-success', "Registered successfully, please login.!");
    }
    public function login(Request $request){
        // return("test");
        $cek=$request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);
        if(Auth::attempt($cek)){
            $request -> session() ->regenerate();
            return redirect('/homepage');
        };
        return redirect('/') -> with('login-error', "ulang lagiii");
    }
}
