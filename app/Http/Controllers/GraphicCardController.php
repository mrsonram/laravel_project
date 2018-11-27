<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\GraphicCardModel;

class GraphicCardController extends Controller
{
    public function index() {
        $table_graphiccard = GraphicCardModel::select_all();
        $data = ["table_graphiccard" => $table_graphiccard];
        return view('graphiccard/index',$data);
    }

    public function show($id) {
        $table_graphiccard = GraphicCardModel::select_by_id($id);
        $data = ["table_graphiccard" => $table_graphiccard];
        return view('graphiccard/show',$data);
        }
}
