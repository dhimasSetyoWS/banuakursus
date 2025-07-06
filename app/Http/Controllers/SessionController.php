<?php

namespace App\Http\Controllers;

use App\Models\CourseModule;
use Illuminate\Http\Request;

class SessionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function getAllSession()
    {
        //
        return CourseModule::all();
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $validate = $request->validate([
            'module_name' => 'required|string|max:80',
            'description' => 'required|string'
        ]);
        if($validate) {
            sleep(2);
            CourseModule::create([
                'module_name' => $request->module_name,
                'description' => $request->description,
                'course_id' => $request->course_id
            ]);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
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
        $validate = $request->validate([
            'module_name' => ['required' , 'string', 'max:80'],
            'module_link' => ['required' , 'string' , 'max:80']
        ]);

        CourseModule::where('module_id' , $id)->update($validate);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete(string $id)
    {
        //
        $course = CourseModule::where('module_id', $id);
        if($course) {
            $course->delete();
        }
    }
}
