<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ManagementStudentController extends Controller
{

    public function add()
    {
        return view('layouts.blackend.student.index');
    }

    public function studentSkills()
    {
        return view('layouts.blackend.student.studentSkills');
    }
}
