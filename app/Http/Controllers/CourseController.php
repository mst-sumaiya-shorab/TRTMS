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
        $allcourse = Course::all();
        return view('pages.course.course', compact('allcourse'));
       
    }
    public function create()
    {
        return view('pages.course.create');
    }
    public function store(Request $request)
    {
        $id = $request->id;
        $s_id = $request->s_id;
        $course_id = $request->course_id;
        $semester = $request->semester;
        $title = $request->title;
        $year= $request->year;


        $this->validate($request, [
            's_id' => 'required',
            'course_id' => 'required',
            'semester' => 'required',
            'title' => 'required',
            'year' => 'required',
        ]);
        
        $data = $request->all();
        $data['s_id'] = auth('member')->user()->s_id;
        
        unset($data['_token']);
        Course::create($data);

        return redirect()->route('course');

        dd($request->all(), $request->validated());
    }
 
    
   
}

