<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DashboardCourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.course.index', [
            'courses'=>Course::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // return $request->file('image')->store('post-images');
        $validatedData = $request->validate([
            'courseName' => 'required|max:255',
            'image' => 'image|file|max:3072',
            'description' => 'required|max:255'
        ]);
        
        if($request->file('image')){
            $validatedData['image'] = $request->file('image')->store('post-images');
        }

        Course::create($validatedData);

        // $post = new Course;
        // $post->courseName = $request->courseName;
        // $post->module = $request->module;
        // $post->description = $request->description;
        // $post->save();

        return redirect('admin/course')->with('success', 'New post has been added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\course  $course
     * @return \Illuminate\Http\Response
     */
    public function show(Course $course)
    {
        return view('course', [
            'course' => $course
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\course  $course
     * @return \Illuminate\Http\Response
     */
    public function edit(Course $course)
    {
        return view('course', [
            'course' => $course,
            'courses'=>Course::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\course  $course
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Course $course)
    {
        $validatedData = $request->validate([
            'courseName' => 'required|max:255',
            'image' => 'image|file|max:3072',
            'description' => 'required|max:255'
        ]);

        Course::where('id', $course->id)
            ->update($validatedData);

        return redirect('admin/course')->with('success', 'New post has been added!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\course  $course
     * @return \Illuminate\Http\Response
     */
    public function destroy(Course $course)
    {
        if($course->image){
            Storage::delete($course->image);
        }

        Course::destroy($course->id);

        return redirect('admin/course')->with('success', 'Post has been deleted!');
    }
}
