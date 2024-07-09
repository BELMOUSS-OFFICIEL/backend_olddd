<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Reservatio;

use Illuminate\Support\Facades\DB;

class ReservationApi extends Controller
{
    /**
     * Display a listing of the resource.
     */


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $rolation=DB::table('reservationsrolations')->where('id',$request->reservationsrolation_id)->first();
        $profile=DB::table('profiles')->where('id',$request->profile_id)->first();
        $immobiliere=DB::table('immobilieres')->where('id',$request->immobiliere_id)->first();

        if($rolation && $immobiliere && $profile && $request->dateDebut<=$request->dateFin){
            $ok=Reservatio::create([
                'dateDebut'=>$request->dateDebut,
                'dateFin'=>$request->dateFin,
                'nbPerssonnes'=>$request->nbPerssonnes,
                'reservationsrolation_id'=>$request->reservationsrolation_id,
                'profile_id'=>$request->profile_id,
                'immobiliere_id'=>$request->immobiliere_id,
                        ]);
                        return response()->json([
                            'data'=>$ok,
                        ]);
        }else{
            return response()->json([
                'error'=>true,
                'message'=>'Error ol',
            ]);
        }


    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $reservation=Reservatio::with('immobiliere')->where('profile_id',$id)->get();
        if($reservation->count()<=0){
            return response()->json([
                'error' =>true,
                'message' => 'Not Found'
            ]);
        }
        return response()->json(['data' => $reservation]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $reservation=Reservatio::find($id);
        $reservation->dateDebut=$request->dateDebut;
        $reservation->dateFin=$request->dateFin;
        if($reservation->save()){
             return response()->json([
                'data'=>$reservation,
             ]);
        }

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
