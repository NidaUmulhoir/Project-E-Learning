<?php

namespace App\Http\Controllers;

use App\Models\Module;
use App\Models\Course;
use App\Models\Pricelist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DashboardPricelist extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        session(["data"=>request()->courseId]);
        return view('dashboard.pricelist.index', [
            'pricelists'=>Pricelist::all()
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
    public function show(Pricelist $pricelist)
    {
        // return view('pricelist', [
        //     'pricelist' => $course
        // ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\course  $course
     * @return \Illuminate\Http\Response
     */
    public function edit(Pricelist $pricelist)
    {
        return view('dashboard.pricelist.edit', [
            'pricelist' => $pricelist,
            'pricelists'=>Pricelist::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\course  $course
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pricelist $pricelist)
    {
        $validatedData = $request->validate([
            'packet' => 'required|max:255',
            'price' => 'required|max:255'
        ]);

        Pricelist::where('id', $pricelist->id)
            ->update($validatedData);

        return redirect('/admin/pricelist')->with('success', 'New post has been added!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\course  $course
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pricelist $pricelist)
    {
        Pricelist::destroy($pricelist->id);

        return redirect('/admin/pricelist')->with('success', 'Post has been deleted!');
    }
}
