<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;
use App\Models\Videos;
class VideoRequest extends FormRequest
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
            'video' => ['required', ]
        ];
    }


    // methode pour la validation de la video 
    // Elle retournera l'id de la video a affecter a la galerie qui est lier a un vehicule
    public function validateVideo(Request $request) : int {

        // Recuperation de la video depuis le formulaire
        $video = $request->file('video');

        // sauvegarde dans le systeme de fichier
        $videoPath = $video->store('vehicule/videos', 'public');

        //enregistrement dans la DB et recuperation de id
        Videos::create([
            'video' => $videoPath
        ]);
        $video = Videos::query()->where('video','=',$videoPath)->get('id');

        // On retourne l'id de la video uploader
        return $video[0]->id;

    }
}
