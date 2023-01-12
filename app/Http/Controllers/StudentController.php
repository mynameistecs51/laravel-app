<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function add()
    {
        return view('layouts.blackend.student.index');
    }

    public function studentSkills()
    {
        return view('layouts.blackend.student.studentSkills');
    }
}
