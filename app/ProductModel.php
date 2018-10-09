<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class ProductModel extends Model
{
    public static function select_all() {
        $sql = "SELECT * FROM tb_product";
        return DB::select($sql, []);
    }

    public static function select_by_id($id) {
        $sql = "SELECT * FROM tb_product
        WHERE product_id = {$id}";
        return DB::select($sql, []);
    }

    public static function insert($product_code, $product_name, $product_unit, $normal_price) {
        $sql = "INSERT INTO tb_product (product_code, product_name, product_unit, normal_price)
        VALUES ( '{$product_code}', '{$product_name}', '{$product_unit}', {$normal_price} )";
        DB::insert($sql, []); //NO NEED TO RETURN
    }

    public static function update_by_id($product_code, $product_name, $product_unit, $normal_price ,$id) {
        $sql = "UPDATE tb_product SET
        product_code = '{$product_code}',
        product_name = '{$product_code}',
        product_unit = '{$product_unit}',
        normal_price = {$normal_price}
        WHERE product_id = {$id}";
        DB::update($sql, []);
    }

    public static function delete_by_id($id) {
        $sql = "DELETE FROM tb_product WHERE product_id = {$id}";
        DB::delete($sql, []);
    }
}
