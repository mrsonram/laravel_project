<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\IMDBModel;

class IMDBController extends Controller
{  
    public function index() {
        $table_imdb = IMDBModel::select_all();
        $data = ["table_imdb" => $table_imdb];
        return view('imdb/index', $data);
    }

    public function create() {
        return view('imdb/create');
    }

    public function store(Request $request) {
        $heading = $request->input('heading');
        $cast = $request->input('cast');
        $storyline = $request->input('storyline');
        $detail = $request->input('detail');
        $box_office = $request->input('box_office');
        $company_credits = $request->input('company_credits');
        $users_review = $request->input('users_review');

        IMDBModel::insert($heading, $cast, $storyline, $detail, $box_office, $company_credits, $users_review);
        return redirect('/imdb');
    }

    public function show($id) {
        $table_imdb = IMDBModel::select_by_id($id);
        $data = ["table_imdb" => $table_imdb];
        return view('imdb/show',$data);
    }

    public function edit($id) {
        $table_imdb = IMDBModel::select_by_id($id);
        $data = ['table_imdb' => $table_imdb];
    return view('imdb/edit',$data);
    }

    public function update(Request $request, $id) {
        $heading = $request->input('heading');
        $cast = $request->input('cast');
        $storyline = $request->input('storyline');
        $detail = $request->input('detail');
        $box_office = $request->input('box_office');
        $company_credits = $request->input('company_credits');
        $users_review = $request->input('users_review');
            
    IMDBModel::update_by_id($heading, $cast, $storyline, $detail, $box_office, $company_credits, $users_review);
    return redirect('/imdb');
    }

    public function destroy($id) {
        IMDBModel::delete_by_id($id);
        return redirect('/imdb');
        }
}
