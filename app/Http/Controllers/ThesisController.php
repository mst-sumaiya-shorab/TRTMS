<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Faculty;
use App\Models\Thesis;

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
    public function store(){
        
    }
}
