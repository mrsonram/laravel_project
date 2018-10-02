<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class EmployeeModel extends Model
{
    public static function select_all () {
        $sql = "SELECT * FROM tb_employee";
    return DB::select($sql , []);
    }
}
