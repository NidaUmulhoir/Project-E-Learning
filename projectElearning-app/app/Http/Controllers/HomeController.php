<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Activity;
use Illuminate\Http\Request;
use App\Models\Module;
use App\Models\Payment;
use App\Models\Pricelist;
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
            'courses'=>Course::all(),
            'activities' => Activity::with(['user', 'course', 'module'])->latest()->take(3)->get()->unique('idModule'),
        ]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function subscribe()
    {
        return view('subscribepage',[
            'pricelists'=>Pricelist::all()
        ]);
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
        Activity::create([
            'idUser' => auth('member')->user()->id,
            'idCourse' => $modul->course->id,
            'idModule' => $modul->id
        ]);
        return view('modul', [
           'modul' => $modul 
        ]);
    }

    public function payment($id)
    {
        $pricelist = Pricelist::find($id);
        return  view('payment_dashboard',[
            'price' => $pricelist
        ]);
    }

    public function paymentStore($id)
    {
        $payment = Pricelist::find($id);
        Payment::create([
            'idUser' => auth('member')->user()->id,
            'idPacket' => $payment->id,
            'price' =>  $payment->price,
            'approve' => 'waiting'
        ]);
        return  view('payment_dashboard',[
            'price' => $payment
        ]);
    }
}
