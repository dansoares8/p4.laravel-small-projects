<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Iluminate\Support\Facades\Validator;

class ProductController extends Controller
{
    //this method will show products page
    public function index() {

    }

    //this method will show create product page
    public function create() {
        return view('products.create');
    }

    //this method will store a product in db
    public function store(Request $request){
        $rules = [
            'name' => 'required|min:5',
            'sku' => 'required|min:3',
            'price' => 'required|numeric'
        ];

        $validator = Validator::make($request->all(), $rules);

        if($validator->fails()){
            return redirect()->route('products.create')->withInput()->withErrors($validator);
        }
    }

    //this method will show edit products page
    public function edit(){

    }

    //this method will update a product
    public function update(){

    }

    //this method will delete a product
    public function destroy(){

    }
}