<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateVehiculeRequest;
use App\Models\Category;
use App\Models\Marque;
use Illuminate\Http\Request;
use App\Models\vehicule;

class VehiculeController extends Controller
{
    public function index(){
        return view('vehicule.index', [
            'vehicules'=> Vehicule::all()
        ]);
    }

    public function show($id){
        $vehicule = Vehicule::find($id);
        return view('vehicule/show', [
            'vehicule'=> $vehicule
        ]);
    }    

    public function create(){
        return view('vehicule/create', [
            'marques' => Marque::all(),
            'categories' => Category::all()
        ]);
    }

    public function store(CreateVehiculeRequest $request){
        $vehicule = Vehicule::create($request->validated());
        $vehicule->category_id = $request->category_id;
        $vehicule->marque_id = $request->marque_id;
        $vehicule->save();
        return redirect('/vehicule');
    }
}
