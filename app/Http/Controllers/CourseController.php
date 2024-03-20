<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\Student;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function course()
    {
        $allcourse = Course::with('student')->get();
        return view('pages.course.course', compact('allcourse'));
    }
    public function create()
    {
        $data['students'] = Student::all();
        return view('pages.course.create', $data);
    }
    public function store(Request $request)
    {
        $id = $request->id;
        $student_id = $request->student_id;
        $course_id = $request->course_id;
        $semester = $request->semester;


        $this->validate($request, [
            'student_id' => 'required',
            'course_id' => 'required',
            'semester' => 'required',
        ]);
        $data = $request->all();

        unset($data['_token']);
        Course::create($data);

        return redirect()->route('course');

        dd($request->all(), $request->validated());
    }
}
