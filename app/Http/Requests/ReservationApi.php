<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ReservationApi extends FormRequest
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
            'dateDebut'=>'required|date',
            'dateFin'=>'required|date',
            'nbPerssonnes'=>'required|numeric',
            'reservationsrolation_id'=>'required|integer',
            'profile_id'=>'required|integer',
            'immobiliere_id'=>'required|integer',
            

        ];
    }
}
