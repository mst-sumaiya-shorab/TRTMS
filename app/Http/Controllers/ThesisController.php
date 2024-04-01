<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Thesis;
use App\Models\Faculty;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\Assign;
use App\Http\Controllers\Controller;
use App\Models\Assign_course;

class ThesisController extends Controller
{
    public function thesis(){

        $allthesis=Thesis::all();
        return view('pages.course.thesis',compact('allthesis'));
   

    }
    
    public function newthesis(){
        
        $data['theses'] = Course::where('course_id', 'Thesis')->get();
        $data['faculties'] = Faculty::all();
        return view('pages.newregister.newthesis', $data);

    }
}
