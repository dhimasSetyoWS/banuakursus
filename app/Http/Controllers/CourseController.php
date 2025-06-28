<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\CourseModule;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;
use App\Library\Agurooz\AguroozConfig;
use Illuminate\Support\Facades\Http;
class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($id)
    {
        //
        // $a = self::getTotalCourse($id);
        return Inertia::render('Dashboard/Page/MainDashboard' , [
            'totalCourse' => self::getTotalCourse($id),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function getTotalCourse($id)
    {
        //
        $totalCourse = Course::where('user_id', $id)->get()->count();
        return $totalCourse;
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        sleep(1);
        $request->validate([
            'title_course' => 'required|string|max:255|unique:' . Course::class,
            'description' => 'required|string',
            'price' => 'required|integer',
        ]);

        $data = array(
            'institution_code' => AguroozConfig::$institution_code,
            'class_name' => "Test 123"
        );

        $final_url = AguroozConfig::$agurooz_url . "api/lms/classes/create";
        $response = Http::post($final_url, $data)->json();
        dd($response);
        $course = Course::create([
            'title_course' => $request->title_course,
            'description' => $request->description,
            'price' => $request->price,
            'user_id' => Auth::user()->id,
        ]);
        // refresh kembali halaman
        return redirect()->route('dashboard.manage' , Auth::user()->id)->with('message' , 'Success tambah data');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        sleep(1);
        $courses = Course::where('user_id', $id)->get(['course_id', 'title_course', 'description', 'price']);
        return Inertia::render('Dashboard/Page/ManageCourse', [
            'courses' => $courses
        ])->with('message' , 'Course berhasil di buat');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        sleep(1);
        $course = Course::where('course_id' , $id)->first();
        $module = CourseModule::where('course_id' , $id)->get();
        return Inertia::render('Dashboard/Page/Course/EditCourse' , [
            'course' => $course,
            'modules' => $module
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        sleep(1);
        $validate = $request->validate([
            'title_course' => ['string', 'max:255', 'unique:' . Course::class],
            'description' => ['string'],
            'price' => ['integer'],
        ]);

        if($validate) {
            Course::where('course_id' , $id)->update($validate);
            return redirect()->route('dashboard.manage' , Auth::user()->id)->with('message' , 'Course berhasil di update');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $deleted = Course::where('course_id', $id);
        if ($deleted) {
            $deleted->delete();
            return redirect()->route('dashboard.manage', Auth::user()->id)->with('delete', 'Course berhasil di delete');
        } else {
            return redirect()->route('dashboard.manage', Auth::user()->id)->with('error', 'Gagal Delete');
        }
    }
}
