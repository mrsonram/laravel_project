<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class IMDBModel extends Model
{
    public static function select_all() {
        $sql = "SELECT * FROM tb_imdb";
        return DB::select($sql , []);
        }

    public static function select_by_id($id) {
        $sql = "SELECT * FROM tb_imdb
        WHERE imdb_id = {$id}";
        return DB::select($sql , []);
        }

    public static function insert($heading, $cast, $storyline, $detail, $box_office, $company_credits, $users_review) {
        $sql = "INSERT INTO tb_imdb (heading, cast, storyline, detail, box_office, company_credits, users_review)
        VALUES ( '{$heading}', '{$cast}', '{$storyline}', '{$detail}', '{$box_office}', '{$company_credits}', {$users_review})";
        DB::insert($sql, []); //NO NEED TO RETURN
        }
    
    public static function update_by_id($heading, $cast, $storyline, $detail, $box_office, $company_credits, $users_review) {
        $sql = "UPDATE tb_imdb SET
        heading = '{$heading}',
        cast = {$cast},
        storyline = '{$storyline}',
        detail = '{$detail}',
        box_office = '{$box_office}',
        company_credits = '{$company_credits}',
        users_review = {$users_review}
        WHERE imdb_id = {$id}";
        DB::update($sql, []);
        }

    public static function delete_by_id($id){
        $sql = "DELETE FROM tb_imdb WHERE imdb_id = {$id}";
        DB::delete($sql, []);
        }
}