<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function index(){
        $categories = Category::all();   
        return view('category/index', ['categories' => $categories]);
    }

    public function create(){

    }

    public function store(Request $request){

    }

    public function show($id){

    }


    public function update(Request $request, $id){

    }

    public function destroy($id){
        
    }
}
