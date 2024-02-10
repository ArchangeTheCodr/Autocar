<?php

namespace App\Http\Controllers;

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
       
        return dd(Marque::all());
    }
}
