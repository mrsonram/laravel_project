<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\StudentModel;

class StudentController extends Controller
{
    public function index () {
        $table_student = studentModel::select_all ();
        $data = ["table_student" => $table_student];
    return view ('student/index', $data);
    }
}
