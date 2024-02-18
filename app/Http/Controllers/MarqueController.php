<?php

namespace App\Http\Controllers;

use App\Http\Requests\MarqueRequest;
use Illuminate\Http\Request;
use App\Models\Marque;

class MarqueController extends Controller
{
    public function index(){
        return view('marque/index', [
            'marques'=> Marque::all()
        ]);
    }

    public function show($id){
        $marque = Marque::find($id);
        return view('marque/show', [
            'marque' => $marque->name,
            'vehicules' => $marque->vehicule
        ]);
    }

    public function create(){ 
        return view('marque/create');
    }

    public function store(MarqueRequest $request){
        Marque::create($request->validated());
        return redirect('/marque');
    }

    public function edit($id){
        $marque = Marque::find($id);
        return view('marque/edit', [
            'marque'=> $marque
        ]);
    }

    public function update(MarqueRequest $request, $id){
        $marque = Marque::find($id);
        $marque->update($request->validated());
        return redirect()->route('marque.index');
    }

    public function destroy($id){
        Marque::find($id)->delete();
        return redirect()->route('marque.index');
    }
}
