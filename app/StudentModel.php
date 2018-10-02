<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class StudentModel extends Model
{
    public static function select_all () {
        $sql = "SELECT * FROM tb_student";
    return DB::select ($sql, []);     
    }
}