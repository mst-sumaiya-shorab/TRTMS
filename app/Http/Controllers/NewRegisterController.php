<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Member;
use App\Models\Student;
use Illuminate\Http\Request;

class NewRegisterController extends Controller
{
    public function newregister()
    {

        $allnewregister = Member::where('status', 'deactive')->get();

        return view('pages.newregister.newregister', compact('allnewregister'));
    }

    public function create()
    {
        return view('pages.newregister.create');
    }

    public function view($id)
    {
        return view('pages.newregister.view');
    }
}
