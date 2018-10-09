<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ProductModel;

class ProductController extends Controller
{
    public function index() {
        $table_product = ProductModel::select_all();
        $data = ["table_product" => $table_product];
        return view('product/index',$data);
    }

    public function show($id) {
        $table_product = ProductModel::select_by_id($id);
        $data = ["table_product" => $table_product];
        return view('product/show', $data);
    }

    public function create() {
        return view('product/create');
    }

    public function store(Request $request) {
        $product_code = $request->input('product_code');
        $product_name = $request->input('product_name');
        $product_unit = $request->input('product_unit');
        $normal_price = $request->input('normal_price');
        ProductModel::insert($product_code, $product_name, $product_unit, $normal_price);
        return redirect('/product');
    }

    public function edit($id) {
        $table_product = ProductModel::select_by_id($id);
        $data = ['table_product' => $table_product];
        return view('product/edit',$data);
    }

    public function update(Request $request, $id) {
        $product_code = $request->input('product_code');
        $product_name = $request->input('product_name');
        $product_unit = $request->input('product_unit');
        $normal_price = $request->input('normal_price');
        ProductModel::update_by_id($product_code, $product_name, $product_unit, $normal_price, $id);
        return redirect('/product');
    }

    public function destroy($id) {
        ProductModel::delete_by_id($id);
        return redirect('/product');
    }
}
