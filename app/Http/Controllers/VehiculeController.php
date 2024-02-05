<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\vehicule;

class VehiculeController extends Controller
{
    public function index(){
        return view('vehicule.index', [
            'vehicules'=> Vehicule::all()
        ]);
    }

    public function create(){
        // vehicule::create([
        //     'name'=> 'Electron mini',
        //     'price' => 80000,
        //     'matricule'=> '107 fg 06',
        //     'year' => date('2020-10-12'),
        // ]);
        // vehicule::create([
        //     'name'=> 'Electron enterprise',
        //     'price' => 105000,
        //     'matricule'=> '666 cc 06',
        //     'year' => date('2020-10-12'),
        // ]);
        // vehicule::create([
        //     'name'=> 'Boss',
        //     'price' => 55000,
        //     'matricule'=> '203 bm 06',
        //     'year' => date('2014-11-08'),
        // ]);
        // vehicule::create([
        //     'name'=> 'G-05',
        //     'price' => 68000,
        //     'matricule'=> '399 mj 06',
        //     'year' => date('2015-04-01'),
        // ]);
        dd(vehicule::with(['category', 'marque'])->get());
    }
}
