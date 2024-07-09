<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ImmobilierRequest extends FormRequest
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
            'nom' => 'required',
            'adresse' => 'required',
            'prix' => 'required|numeric',
            'prixParJour' => 'nullable|numeric',
            'categorie_id' => 'required|integer',
            'type_id' => 'required|integer',
            'description' => 'required|min:10',
            'nbrChamber' => 'nullable|integer',
            // 'images.*' => 'required', // Max size in kilobytes (5MB)
            'images.*' => 'required|image|mimes:png,jpg,jpeg,svg|max:5120', // Max size in kilobytes (5MB)
            
            'nprToilets' => 'nullable|integer',
            // 'cin' => 'required|unique:proprietaires,cin',
            'nomp' => 'required',
            'prenom' => 'required',
            'tele' => 'required',
        ];
    }
}
