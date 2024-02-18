<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateVehiculeRequest extends FormRequest
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
            'name' => ['required', 'string','min:3', 'unique:vehicules'],
            'price' => ['required'],
            'matricule' => ['', 'min:5', 'max:8', 'unique:vehicules'],
            'year' => ['required',],
            'category_id' => ['required', ],
            'marque_id' => ['required', ]
        ];
    }
}
