<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Member;
use App\Models\Thesis;
use App\Models\Student;
use App\Models\Practicum;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Assign_course;
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
