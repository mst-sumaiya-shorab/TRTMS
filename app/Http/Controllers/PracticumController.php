<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\Practicum;
use Illuminate\Http\Request;

class PracticumController extends Controller
{
    public function practicum(){

        $allpracticum=Practicum::all();
        return view('pages.course.practicum',compact('allpracticum'));

    }
    public function newpracticum(){

        $data['practicums'] = Course::where('course_id', 'Practicum')->get();
        return view('pages.newregister.newpracticum', $data);

    }
}
