<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\models\Immobiliere;

class indexControllerApi extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        //         $reservationEnCours=Reservatio::where('etate','en cours')->get();
        // dd($reservationEnCours);

        $immobilieres = Immobiliere::where('disponeble','1')->with('categorie', 'type')->orderBy('id', 'desc')->limit(6)->get();

        // $immobilierValid=Reservatio::where('etate','en cours')->get();

        if (isset($immobilieres)) {
            if ($immobilieres) {
                return response()->json(['data' => $immobilieres]);
            } else {
                return response()->json(['error' => true]);
            }
        } else {
            return response()->json(['error' => true]);
        }
    }

    


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
