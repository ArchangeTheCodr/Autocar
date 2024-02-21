<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;
use App\Models\Images;

class ImageRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'image' => ['required', ]
        ];
    }

    // methode pour la validation des images
    // Elle retournera l'id des images a affecter a la galerie qui est lier a un vehicule
    public function validateImage(Request $request) : array {

        // Recuperation des images depuis le formulaire
        $images = $request->file('image');

        // sauvegarde des image dans le systeme de fichier
        foreach($images as $image) $imagesPath[] = $image->store('vehicule/images', 'public');

        //enregistrement dans la DB et recuperation des id dans la variable galerieImage
        foreach($imagesPath as $path){
            Images::create([
                'image' => $path
            ]);

            // On recupere chaque image uploader
            $data[] = Images::query()->where('image','=',$path)->get('id');

            // Recuperation de l'id de chaque image
            foreach($data as $image) $imagesId[] = $image[0]->id;
        }      

        return $imagesId;
    }
}
