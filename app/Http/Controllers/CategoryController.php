<?php

namespace App\Http\Controllers;

use App\Http\Requests\CategoryRequest;
use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function index(){
        $categories = Category::all();   
        return view('category/index', ['categories' => $categories]);
    }

    public function create(){
        return view('category/create');
    }

    public function store(CategoryRequest $request){
        $category = Category::create($request->validated());

        return redirect('/category')/* ->with('success', 'Categorie creer avec succes ') */;
    }

    public function show($id){
        $category = Category::find($id);
        return  view('category/show',[
            'vehicules'=> $category->vehicule,
            'name' => $category->name
        ]) ;
    }

    public function edit($id){
        // dd($category);
        $category =  Category::find($id);
        return view('category/edit',[
            'category'=> $category
        ]);
    }

    public function update(CategoryRequest $request, $id){
        $category = Category::find($id);
        $category->update($request->validated());
        return redirect('/category');
    }

    public function destroy($id){
        Category::find($id)->delete();
        return redirect()->route('category.index');
    }
}
