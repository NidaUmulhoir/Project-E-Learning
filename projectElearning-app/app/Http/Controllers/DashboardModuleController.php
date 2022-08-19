<?php

namespace App\Http\Controllers;

use App\Models\Module;
use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DashboardModuleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        session(["data"=>request()->courseId]);
        return view('dashboard.module.index', [
            'modules'=>Module::where('idCourse', request()->courseId)->latest()->get()
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
        return view('dashboard.module.create', [
            'modules'=>Module::where('idCourse', request()->courseId)->get()
        ]);
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
        $post = new Module;
        $post->moduleName = $request->moduleName;
        $post->materi = $request->materi;
        $post->idCourse = $request->idCourse;
        $post->type = $request->type;
        $post->isSubscribe = $request->input('isSubscribe') ? true : false;
        $post->save();

        return redirect('/admin/course-detail/module?courseId='. session('data'))->with('success', 'New post has been added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\course  $course
     * @return \Illuminate\Http\Response
     */
    public function show(Course $course)
    {
        return view('module', [
            'course' => $course
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\course  $course
     * @return \Illuminate\Http\Response
     */
    public function edit(Module $module)
    {
        return view('dashboard.module.edit', [
            'module' => $module,
            'modules'=>Module::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\course  $course
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Module $module)
    {
        $validatedData = $request->validate([
            'moduleName' => 'required|max:255',
            'type' => 'required|max:255'
        ]);

        Module::where('id', $module->id)
            ->update($validatedData);

        return redirect('/admin/course-detail/module?courseId='. session('data'))->with('success', 'New post has been added!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\course  $course
     * @return \Illuminate\Http\Response
     */
    public function destroy(Module $module)
    {
        if($module->image){
            Storage::delete($module->image);
        }
        Module::destroy($module->id);

        return redirect('/admin/course-detail/module?courseId='. session('data'))->with('success', 'Post has been deleted!');
    }
}
