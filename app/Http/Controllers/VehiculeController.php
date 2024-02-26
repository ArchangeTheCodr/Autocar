<?php

namespace App\Http\Controllers;

use App\Http\Requests\GalerieRequest;
use App\Http\Requests\ImageRequest;
use App\Http\Requests\VehiculeRequest;
use App\Http\Requests\VideoRequest;
use App\Models\Category;
use App\Models\Marque;
use App\Models\Images;
use App\Models\Galeries;
use App\Models\Videos;
use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use App\Models\Vehicule;
use Illuminate\Support\Facades\Storage;

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


    // methode pour la validation des donnees du model vehicule
    private function validateVehicule(VehiculeRequest $request, Request $request2){
        $vehicule = Vehicule::create($request->validated());
        $vehicule->category_id = $request->category_id;
        $vehicule->marque_id = $request->marque_id;
        $galReq = new GalerieRequest;
        $vehicule->galeries_id = $galReq->createGalerie($request2);
        $vehicule->save();
    }

    public function store(Request $request,VehiculeRequest $vehiculeRequest){
        $this->validateVehicule($vehiculeRequest, $request);
        return redirect('/vehicule');
    }

    

    public function edit($id){
        $vehicule = Vehicule::find($id);
        return view('vehicule/edit', [
            'vehicule'=> $vehicule,
            'marques' => Marque::all(),
            'categories' => Category::all()
        ]);
    }

    public function update(Request $request2, VehiculeRequest $request, $id){
        // Recuperation du vehicule
        $vehicule = Vehicule::find($id);

        // Mise ajour des donnees
        $vehicule->update($request->validated()) ;
        $vehicule->category_id = $request->category_id;
        $vehicule->marque_id = $request->marque_id;
        
        //recuperation de l'ancienne galerie
        $gal = $vehicule->galerie;
        $galerie = Galeries::find($gal->id);

        //suppression des anciens medias dans le systeme de fichiers laravel
        Storage::disk('public')->delete($galerie->video->video);
        foreach($galerie->images as $image) Storage::disk('public')->delete($image->image);


        // Suppression de l'ancienne galerie dans la db
        foreach($galerie->images as $image) $image->delete();
        $video = Videos::find($galerie->video->id);
        $video->delete();
        $galerie->delete();

        
        // Creation de la nouvelle galerie avec les nouveaux medias soumis
        $galReq = new GalerieRequest;
        $vehicule->galeries_id = $galReq->createGalerie($request2);

        // Sauvegarde des nouvelles donnees
        $vehicule->save();

        return redirect()->route('vehicule.index');
    }

    public function destroy($id){
        Vehicule::find($id)->delete();
        return redirect()->route('vehicule.index');
    }
}
