<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Faculty;
use App\Models\Practicum;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PracticumController extends Controller
{
    public function practicum()
    {

        $allpracticum = Practicum::all();
        return view('pages.course.practicum', compact('allpracticum'));
    }
    public function newpracticum()
    {

        $data['practicums'] = Course::where('course_id', 'Practicum')->get();
        $data['faculties'] = Faculty::all();
        return view('pages.newregister.newpracticum', $data);
    }
}
