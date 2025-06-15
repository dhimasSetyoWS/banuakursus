<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'title_course' => 'required|string|max:255|unique:' . Course::class,
            'description' => 'required|string',
            'price' => 'required|integer',
        ]);

        $course = Course::create([
            'title_course' => $request->title_course,
            'description' => $request->description,
            'price' => $request->price,
            'user_id' => Auth::user()->id,
        ]);

        return redirect()->route('dashboard.manage');


    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $courses = Course::where('user_id' , $id)->get();
        return Inertia::render('Dashboard/Page/ManageCourse' , [
            'courses' => $courses
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
