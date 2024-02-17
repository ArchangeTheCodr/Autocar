<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateVehiculeRequest;
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
        return view('vehicule/create');
    }

    public function store(CreateVehiculeRequest $request){
        Vehicule::create($request->validated());
        redirect('/vehicule');
    }
}
