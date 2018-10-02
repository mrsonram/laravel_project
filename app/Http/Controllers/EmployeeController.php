<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\EmployeeModel;
use App\PositionModel;

class EmployeeController extends Controller
{
    public function index() {
        $table_employee = EmployeeModel::select_all();
        $data = ["table_employee" => $table_employee];
    return view ('employee/index',$data);
    }

    public function create() {
	    $table_position = PositionModel::select_all();
        $data = ["table_position" => $table_position];
    return view('employee/create',$data);
    }

    public function store(Request $request) {
        $name = $request->input('name');
        $age = $request->input('age');
        $address = $request->input('address');
        $salary = $request->input('salary');
        $position_id = $request->input('position_id');
        
        EmployeeModel::insert($name, $age, $address, $salary, $position_id);
    return redirect('/employee');
    }

    public function show($id) {
        $table_employee = EmployeeModel::select_by_id($id);
        $data = ["table_employee" => $table_employee];
    return view('employee/show',$data);
    }

    public function edit($id) {
        $table_employee = EmployeeModel::select_by_id($id);
        $table_position = PositionModel::select_all();
        $data = [
        'table_employee' => $table_employee ,
        'table_position' => $table_position
        ];
    return view('employee/edit',$data);
    }

    public function update(Request $request, $id){
        $name = $request->input('name');
        $age = $request->input('age');
        $address = $request->input('address');
        $salary = $request->input('salary');
        $position_id = $request->input('position_id');
            
    EmployeeModel::update_by_id($name, $age, $address, $salary, $position_id, $id);
    return redirect('/employee');
    }

    public function destroy($id) {
    EmployeeModel::delete_by_id($id);
    return redirect('/employee');
    }
}
