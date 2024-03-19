<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    function __construct()
    {
        // $this->middleware('auth');
    }
    public function deshboard(){
        return view('extras.dashboard');
    }
}
