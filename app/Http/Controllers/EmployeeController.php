<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\EmployeeModel;

class EmployeeController extends Controller
{
    public function index () {
        $table_employee = EmployeeModel::select_all();
        $data = ["table_employee" => $table_employee];
    return view ('employee/index',$data);
    }
}
