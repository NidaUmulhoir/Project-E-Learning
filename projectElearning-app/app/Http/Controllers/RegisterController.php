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
        $request->request->add(['role' => 'user']);
        $request['password'] = Hash::make($request['password']);
        User::create($request->all());
        // dd($data);  
        return redirect('/')->with('regis-success', "Registered successfully, please login!");
    }
    public function login(Request $request){
        // return("test");
        $cek=$request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);
        $user = User::where('email', $request->email)->first();
        if($user){
            if(Hash::check($request->password, $user->password)){
                if($user->role == 'admin'){
                    if(Auth::attempt($cek)){
                        $request -> session() ->regenerate();
                        return redirect('/admin/course');
                    };
                }else{
                    if(Auth::guard('member')->attempt($cek)){
                        $request -> session() ->regenerate();
                        return redirect('/homepage');
                    };
                }
            }
        }
        return redirect('/') -> with('login-error', "Your email or password is incorrect. Please try again.");
    }

    public function logoutAdmin(){
        Auth::logout();
        return redirect('/');
    }

    public function logoutMember(){
        Auth::guard('member')->logout();

        return redirect('/');
    }
}
