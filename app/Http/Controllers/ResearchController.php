<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ResearchController extends Controller
{
    public function research()
    {
        return view('pages.research.researchlist');
    }
}
