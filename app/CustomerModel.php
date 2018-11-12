<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CustomerModel extends Model
{
    function select() {
    $sql = "SELECT * FROM customer";
        return DB::select($sql, []);
    }

    function select_id($id) {
    $sql = "SELECT * FROM customer
        WHERE id = {$id}";
        return DB::select($sql, []);
    }

    function select_search($q) {
    $sql = "SELECT * from customer where name like '%{$q}%'";
        return DB::select($sql, []);
    }

    function insert($name, $age, $address, $salary) {
    $sql = "INSERT INTO customer (name,age,address,salary) 
        VALUES( '{$name}', {$age}, '{$address}', {$salary} )";
        DB::insert($sql, []);
    }

    function update($name, $age, $address, $salary, $id) {
    $sql =  "UPDATE customer SET
        name = '{$name}', age = {$age},
        address =  '{$address}', salary =  {$salary}
        WHERE id = {$id}";
        DB::update($sql, []);
    }

    function delete($id) {
    $sql = "DELETE FROM customer WHERE id = {$id}";
        DB::delete($sql, []);
    }
}
