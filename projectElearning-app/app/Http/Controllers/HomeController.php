<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;
use App\Models\Module;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function homepage()
    {
        return view('homepage',[
            'courses'=>Course::all()
        ]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function subscribe()
    {
        return view('subscribepage');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function profile()
    {
        return  view('profilpage');
    }

    public function mainPage()
    {
        return view('mainpage', [
            'courses'=>Course::all(),
            'modules'=>Module::all()
        ]);

        // $course = Course::get();
        // $module = Module::get();
        // $data = $course->concat($module);
        // return view('mainpage', [
        //         'courses'=>$data
        // ]);
    }

    public function modul($id){
        $modul = Module::find($id);
        return view('modul', [
           'modul' => $modul 
        ]);
    }
}
