<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ThesisController extends Controller
{
    public function thesis(){
        return view('pages.course.thesis');

    }
    
    public function newthesis(){
        $data['theses'] = Course::where('course_id', 'Thesis')->get();
        return view('pages.newregister.newthesis', $data);

    }
}
