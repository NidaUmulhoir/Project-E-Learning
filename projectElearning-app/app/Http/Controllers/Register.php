<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class Register extends Controller
{
    // public function register(Request $request){
    //     $request->validate([
    //         'name'=>'required', 
    //         'email' => 'required|email',
    //         'password' => 'required',
    //         'confirm-password' => 'required',
    //     ]);

    //     $request['password'] = Hash::make($request['password']);
    //     $data = User::create($request->all());
    //     // dd($data);  
    //     return redirect('/mainpage');  
    // }
};
