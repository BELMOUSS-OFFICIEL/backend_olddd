<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Achate;
use App\Models\Profile;
use Illuminate\Support\Facades\DB;

class AchateControllerApi extends Controller
{



    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $profile = DB::table('profiles')
            ->where('id', $request->profile_id)
            ->first();
        $immobiliere = DB::table('immobilieres')
            ->where('id', $request->immobiliere_id)
            ->first();



        if ( $immobiliere && $profile ) {
            $profil = Profile::find($request->profile_id);
            $profil->cin = $request->cin;
            $profil->save();
            // $ok=Reservatio::create([
            //     'dateDebut'=>$request->dateDebut,
            //     'dateFin'=>$request->dateFin,
            //     'nbPerssonnes'=>$request->nbPerssonnes,
            //     'reservationsrolation_id'=>$request->reservationsrolation_id,
            //     'profile_id'=>$request->profile_id,
            //     'immobiliere_id'=>$request->immobiliere_id,
            //             ]);

            $ok = Achate::create($request->post());

            return response()->json([
                'error' => false,
                'message' => 'Achate successful',
            ]);
        } else {
            return response()->json([
                'error' => true,
                'message' => 'Achate failed',
            ]);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $achate = Achate::with('immobiliere')->where('profile_id', $id)->get();
        if ($achate->count() <= 0) {
            return response()->json([
                'error' => true,
                'message' => 'Not Found',
            ]);
        }
        return response()->json(['data' => $achate]);
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
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
