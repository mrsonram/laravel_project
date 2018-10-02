<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PositionModel extends Model
{
    public static function select_all() {
        $sql = "SELECT * FROM table_position";
    return DB::select($sql, []);
    }
}
