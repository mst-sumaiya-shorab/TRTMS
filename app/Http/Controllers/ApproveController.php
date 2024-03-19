<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Member;
use App\Models\Student;
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
}
