<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class GraphicCardModel extends Model
{
    public static function select_all() {
        $sql = "SELECT * FROM tb_graphiccard";
    return DB::select($sql , []);
    }

    public static function select_by_id($id) {
        $sql = "SELECT * FROM tb_graphiccard
        WHERE graphiccard_id = {$id}";
    return DB::select($sql, []);
    }        

    public static function insert($name, $details, $price, $graphiccard_id) {
        $sql = "INSERT INTO tb_graphiccard (name, details, price, graphiccard_id)
        VALUES ( '{$name}', '{$details}'', {$price}, {$graphiccard_id})";
    DB::insert($sql, []); //NO NEED TO RETURN
    }

    public static function update_by_id($name, $age, $address, $salary, $position_id, $id) {
        $sql = "UPDATE tb_graphiccard SET
        name = '{$name}',
        age = {$age},
        address =  '{$address}',
        salary =  {$salary},
        position_id =  {$position_id}
        WHERE graphiccard_id = {$id}";
    DB::update($sql, []);
    }

    public static function delete_by_id($id) {
        $sql = "DELETE FROM tb_graphiccard WHERE graphiccard_id = {$id}";
    DB::delete($sql, []);
    }
}
    /*
    public static function select_all() {
        $sql = "SELECT * FROM tb_graphiccard";
        return DB::select($sql , []);
        }

    public static function select_by_id($id) {
        $sql = "SELECT * FROM tb_graphiccard
        WHERE graphiccard_id = {$id}";
        return DB::select($sql , []);
        }

    public static function insert($name, $details, $price, $graphiccard_id){
        $sql = "INSERT INTO tb_graphiccard (name, details, price, graphiccard_id)
        VALUES ( '{$name}', '{$details}', {$price}, {$graphiccard_id})";
        DB::insert($sql, []); //NO NEED TO RETURN
        }            

    public function create() {
        return view('graphiccard/create');
        }

    public function store(Request $request) {
        $name = $request->input('name');
        $details = $request->input('details');
        $price = $request->input('price');
        $graphiccard_id = $request->input('graphiccard_id');	
        
        GraphicCardModel::insert($name, $details, $price, $graphiccard_id);
        return redirect('/graphiccard');
        }
}
