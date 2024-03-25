<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function student(){

        $allStudent=Student::all();

        return view('pages.student.studentlist',compact('allStudent'));
    
    }
    public function create(){
        return view('pages.student.create');
    }
    public function store(Request $request)
    {
        $id = $request->id;
        $name = $request->name;
        $s_id = $request->s_id;
        $semester = $request->semester;
        $course =$request->course;
        $department_id=$request->department_id;
        $phone = $request->phone;
        $email = $request->email;
        // $status = $request->status;


        $this->validate($request, [
            'name' => 'required',
            's_id'=>'required',
            'semester' => 'required',
            'course' => 'required',
            'department_id'=>'required',
            'phone' => 'required',
            'email' => 'required',
            // 'status' => 'required',
        ]);

        $data = $request->all();

        unset($data['_token']);
        Student::create($data);

        return redirect()->route('studentlist');

        dd($request->all(), $request->validated());
    }
    
}
