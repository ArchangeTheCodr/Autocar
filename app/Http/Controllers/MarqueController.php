<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateMarqueRequest;
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

    public function store(CreateMarqueRequest $request){
        Marque::create($request->validated());
        return redirect('/marque');
    }
}
