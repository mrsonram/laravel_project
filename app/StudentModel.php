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

    public static function select_by_id($id) {
        $sql = "SELECT * FROM tb_student
        WHERE student_id = {$id}";
        return DB::select($sql , []);
        }

    public static function insert($name, $hours_per_week, $grade) {
        $sql = "INSERT INTO tb_student (name, hours_per_week, grade)
        VALUES ('{$name}', {$hours_per_week}, '{$grade}')";
        DB::insert($sql, []); //NO NEED TO RETURN
    }
    
    public static function update_by_id($name, $hours_per_week, $grade) {
        $sql = "UPDATE tb_student SET
        name = '{$name}',
        hours_per_week = {$hours_per_week},
        grade = '{$grade}'
        WHERE student_id = {$id}";
    DB::update($sql, []);
    }
}