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
    public function landing()
    {
        return view('landing-page',[
            'courses'=>Course::all(),
        ]);

    }

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
        return view('profilpage',[
            'activities' => Activity::with(['user', 'course', 'module'])->latest()->take(1)->get()->unique('idModule'),
        ]);
        
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

    public function paymentStore(Request $request)
    {
        // return $request->id;
        $validatedData = $request->validate([
            'image' => 'image|file|max:3072',
        ]);
        
        if($request->file('image')){
            $validatedData['image'] = $request->file('image')->store('post-images');
        }

        // return $validatedData['image'];
        $payment = Pricelist::find($request->id);
        Payment::create([
            'idUser' => auth('member')->user()->id,
            'idPacket' => $payment->id,
            'price' =>  $payment->price,
            'approve' => 'waiting',
            'image' => $validatedData['image']
        ]);
        // return  view('payment_dashboard',[
        //     'price' => $payment
        // ])->with('success', 'Please check your subscribe status in your profile');
        return redirect('/profile')->with('success', 'Please check your subscribe status in your profile');
    }

    public function storeImage(Request $request){
        return 'hehe';
    }
}
