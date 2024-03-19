<?php

namespace App\Http\Controllers;

use App\Models\Department;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use League\CommonMark\Extension\CommonMark\Node\Inline\Strong;

class DepartmentController extends Controller
{
    public function department()
    {
        $alldepartment=Department::all();
        return view('pages.department.department',compact('alldepartment'));
    }
    public function create()
    {
        return view('pages.department.create');
    }
    public function store(Request $request)
    {
        $id = $request->id;
        $name = $request->name;
       
        // $status = $request->status;


        $this->validate($request, [
            'name' => 'required',
            
            // 'status' => 'required',
        ]);

        $data = $request->all();

        unset($data['_token']);
        Department::create($data);

        return redirect()->route('department');

        dd($request->all(), $request->validated());
    }

    public function edit($id){
        $departmentitem = Department::findOrFail($id);
        return view('pages.department.edit', compact('departmentitem'));
    
    }

    public function update(Request $request,$id)
    {
        $department = Department::findOrFail($id);
        $department->update($request->all());
        return redirect()->route('department')->with('update', 'Department Update Successfully');
    }

    public function delete($id){
        $department = Department::findOrFail($id);
        $department->delete();
        return redirect()->route('department')->with('danger', '<strong>Department Deleted Successfully</strong>');
    }











    public function semester(){
        return view('pages.semester.semester');
    }
    public function course(){
        return view('pages.course.course');
    }
}
