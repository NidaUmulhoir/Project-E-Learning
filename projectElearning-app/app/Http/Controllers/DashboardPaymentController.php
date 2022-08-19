<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use App\Models\Pricelist;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DashboardPaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        session(["data"=>request()->courseId]);
        return view('dashboard.payment.index', [
            'payments'=>Payment::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // dd(session("data"));
        return view('dashboard.pricelist.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function show(Payment $payment)
    {
        return view('dashboard.payment.show', [
            'payment'=>Payment::find($payment->id)
        ]);
    }
    public function store(Request $request)
    {

        // return('hai');
        $post = new Pricelist;
        $post->packet = $request->packet;
        $post->price = $request->price;
        $post->duration = $request->duration;
        $post->save();

        return redirect('/admin/pricelist')->with('success', 'New post has been added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\course  $course
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Payment $payment)
    {
        $request->request->add(['approve' => 'approved']);

        $date = Carbon::parse($payment->user->subscription)->addDays($payment->packet->duration); 
        $date->toDateString();

        Payment::find($payment->id)->update($request->all());
        User::find($payment->user->id)->update(['subscription' => $date]);
        return redirect('/admin/payment')->with('success', 'Payment has been approved!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\course  $course
     * @return \Illuminate\Http\Response
     */
    public function destroy(Payment $payment)
    {
        Payment::destroy($payment->id);

        return redirect('/admin/payment')->with('success', 'Post has been deleted!');
    }
}
