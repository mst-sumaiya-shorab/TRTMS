<?php

namespace App\Http\Controllers;

use App\Models\Faculty;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Http\Controllers\Controller;
use App\Models\Department;
use Illuminate\Support\Facades\Hash;

class FacultyController extends Controller
{
    public function faculty()
    {

        $allfaculty = Faculty::with('department')->get();

        return view('pages.faculty.facultylist', compact('allfaculty'));
    }
    public function create()
    {
        $data['departments'] = Department::all();
        return view('pages.faculty.create', $data);
    }
    public function store(Request $request)
    {
        $id = $request->id;
        $name = $request->name;
        $f_id = $request->f_id;
        $department_id = $request->department_id;
        $room_no = $request->room_no;
        $phone = $request->phone;
        $email = $request->email;
        $password = $request->password;


        $this->validate($request, [
            'name' => 'required',
            'f_id' => 'required',
            'department_id' => 'required',
            'room_no' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'password' => 'required',
        ]);
        $pass = rand(100000, 40000000);
        $data = $request->all();
        $data['password'] = Hash::make($pass);
        $data['status'] = 'active';
        unset($data['_token']);
        Faculty::create($data);

        // send to faculty mail (notify)
        // mail function

        return redirect()->route('facultylist');

        dd($request->all(), $request->validated());
    }
}
