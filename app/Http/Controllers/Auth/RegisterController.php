<?php

namespace App\Http\Controllers\Auth;


use App\Models\Admin;
use App\Models\Member;
use App\Http\Requests\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class RegisterController extends Controller
{
    public function register()
    {
        return view('auth.register');
    }

    public function registerform(Request $request)
    {
        $id = $request->id;
        $name = $request->name;
        $s_id = $request->s_id;
        $semester = $request->semester;
        $course = $request->course;
        $department = $request->department;
        $phone = $request->phone;
        $email = $request->email;
        $password = $request->password;


        $this->validate($request, [
            'name' => 'required',
            's_id'=>'required',
            'semester'=>'required',
            'course'=>'required',
            'department' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'password' => 'required',
        ]);

        $data = $request->all();
        $data['status'] = 'deactive';
        $data['password'] = Hash::make($data['password']);
        unset($data['_token']);
        Member::create($data);

        Session::flash('success', 'Registration Successfull');
        return redirect()->route('login');

        dd($request->all(), $request->validated());
    }
}
