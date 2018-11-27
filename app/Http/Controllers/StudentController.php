<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\StudentModel;

class StudentController extends Controller
{
    public function index () {
        $table_student = StudentModel::select_all ();
        $data = ["table_student" => $table_student];
    return view ('student/index', $data);
    }

    public function create() {
    return view('student/create');
    }

    public function store(Request $request) {
        $name = $request->input('name');
        $hours_per_week = $request->input('hours_per_week');
        $grade = $request->input('grade');

    StudentModel::insert($name, $hours_per_week, $grade);
    return redirect('/student');
    }

    public function show($id) {
        $table_student = StudentModel::select_by_id($id);
        $data = ["table_student" => $table_student];
    return view('student/show',$data);
    }

    public function edit($id) {
        $table_student = StudentModel::select_by_id($id);
        $data = ['table_student' => $table_student];
    return view('student/edit',$data);
    }

    public function update(Request $request, $id) {
        $name = $request->input('name');
        $hours_per_week = $request->input('hours_per_week');
        $grade = $request->input('grade');
            
    StudentModel::update_by_id($name, $hours_per_week, $grade);
    return redirect('/student');
    }
}
