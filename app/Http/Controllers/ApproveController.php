<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Member;
use App\Models\Thesis;
use App\Models\Student;
use App\Models\Practicum;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;

class ApproveController extends Controller
{
    public function approve($id)
    {
        $member = Member::find($id);
        $member->update(['status' => 'active']);
        Student::create($member->toArray());
        Session::flash('approve', 'Status approved successfully');
        return redirect()->back();
    }
    public function accept($id)
    {
        $thesis = Course::find($id);
        $thesis->update(['status' => 'active']);
        Thesis::create($thesis->toArray());
        Session::flash('accept', 'Status approved successfully');
        return redirect()->back();
    }
    public function accepte($id)
    {
        $practicum = Course::find($id);
        $practicum->update(['status' => 'active']);
        Practicum::create($practicum->toArray());
        Session::flash('accepte', 'Status approved successfully');
        return redirect()->back();
    }

    /**
     *  faculty_id
     *  student_id
     *  courese_name
     *  title
     *  year 
     *  semister
     *  
     * 
     */
    
}
