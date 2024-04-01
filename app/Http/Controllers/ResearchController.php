<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Assign_course;
use App\Models\Faculty;
use Illuminate\Http\Request;

class ResearchController extends Controller
{
    public function research()
    {
        $allassigncourse = Assign_course::all(); 
        $data['faculties'] = Faculty::all();
        return view('pages.research.researchlist', compact('allassigncourse'), $data);
       
    }
    public function create()
    {
        return view('pages.research.create');
    }
    public function store(Request $request)
    {
        // dd($request);


        $id = $request->id;
        $s_id = $request->s_id;
        $course_id = $request->course_id;
        $semester = $request->semester;
        $title = $request->title;
        $year = $request->year;
        $f_id = $request->f_id;
        $status = $request->status;


        // $this->validate($request, [

        //     's_id' => 'required',
        //     'course_id' => 'required',
        //     'title' => 'required',
        //     'semester' => 'required',
        //     'year' => 'required',
        //     'f_id' => 'required',
        //     'status' => 'required',
        // ]);


        $data = $request->all();

        unset($data['_token']);
        // Assign_course::create($data);
        $student = [];
        for ($i = 0; $i < count($request->s_id); $i++) {
            $student['s_id'] = $request->s_id[$i];
            $student['course_id'] = $request->course_id[$i];
            $student['title'] = $request->title[$i];
            $student['semester'] = $request->semester[$i];
            $student['year'] = $request->year[$i];
            $student['f_id'] = $request->f_id[$i];
            $student['status'] = 'active';
            Assign_course::create($student);
        }

        return redirect()->route('research');
    }
}
