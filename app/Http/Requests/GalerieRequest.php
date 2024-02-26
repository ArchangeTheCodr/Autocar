<?php

namespace App\Http\Requests;

use App\Models\Videos;
use Illuminate\Foundation\Http\FormRequest;
use illuminate\Http\Request;
use App\Models\Galeries;
use App\models\Images;

class GalerieRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            //
        ];
    }

    // Cretaion d'une galerie en fonction de la video et des images
    public function createGalerie(Request $request) : int {

        // Recuperation de l'id de la video upload
        $vidreq = new VideoRequest;
        $video_id = $vidreq->validateVideo($request);

        // Recuperation de l'id des images upload
        $imgReq = new  ImageRequest;
        $images_id = $imgReq->validateImage($request);

        // Creation d'une galerie
        $galerie = new Galeries;
        $galerie->save();

        
        // Ajout de l'id de la galerie a la video upload
        $video = Videos::find($video_id);
        $video->galeries_id = $galerie->id;
        $video->update();
        $video->save();

        // Ajout de l'id de la galerie a chaque image upload
        foreach($images_id as $image_id){
            $image = Images::find($image_id);
            $image->galeries_id = $galerie->id;
            $image->update();
            $image->save();
        }

        // On retourne l'id de la galerie a associer au vehicule
        return $galerie->id;
    }

}
