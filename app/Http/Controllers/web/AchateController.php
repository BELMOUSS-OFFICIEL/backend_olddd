<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Achate;
use App\Models\Immobiliere;

class AchateController extends Controller

{
    /**
     * Display a listing of the resource.
     */

     public function __construct()
     {
         $this->middleware('auth');


     }
    public function index()
    {
        //
        $achates=Achate::with('immobiliere')->orderBy('dateReservation','desc')->paginate(10);
        // dd($achates);
        $active=0;
        return view('pages.reservations.achat',compact('achates','active'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
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
        if($request->etate){
            $achate = Achate::find($id);
            $achate->etate=1;
            $immobilier=Immobiliere::find($achate->immobiliere_id);
            $immobilier->disponeble=false;
            // Immobiliere::destroy($achate->immobiliere_id);
            $immobilier->save();
            $achate->save();
            $error='achate est valide';
            // return view('pages.achates.show',compact('achate','error'));
            return redirect()->route('achates.index');
    };
}

public function filterEtate(string $etate){

    if($etate==0){
        $achates=Achate::with('immobiliere')->orderBy('dateReservation','desc')->paginate(10);
        $active=0;
    }else{
        $achates = Achate::where('etate', $etate)->paginate(10);
        $active=$achates[0]->etate;
    }
    return view('pages.reservations.achat',compact('achates','active'));
}

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        Achate::destroy($id);
        return redirect()->route('achates.index');
    }
}
