<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\models\Immobiliere;
use App\Models\Reservatio;

class ImmobiliersControllerApi extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        //         $reservationEnCours=Reservatio::where('etate','en cours')->get();
        // dd($reservationEnCours);

        $immobilieres = Immobiliere::where('disponeble','1')->with('categorie', 'type')->orderBy('id', 'desc')->get();
        // $reservationsValider=Reservatio::where('etate','valider')->select('immobiliere_id')->get();
      // $imoo=Immobiliere::where('id','<>',$reservationsValider[0])->get();
        // dd($reservations);
        
        // return response()->json($imoo);

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
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $immobiliere = Immobiliere::find($id);
        if($immobiliere->type &&$immobiliere->categorie){
            if ($immobiliere == null) {
                return response()->json([
                    'error' => true,
                    'message' => 'Not Found',
                ]);
            }
            return response()->json(['data' => $immobiliere]);
        }
    }
}
