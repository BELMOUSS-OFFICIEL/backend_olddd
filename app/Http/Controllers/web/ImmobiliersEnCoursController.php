<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use App\Models\Immobiliere;
use Illuminate\Http\Request;

class ImmobiliersEnCoursController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //

        $immobilierEnCours=Immobiliere::where('disponeble' ,'=',false)->orderBy('id', 'desc')->paginate(9);
        return view('pages.immobiliers.immobiliers_encours',compact('immobilierEnCours'));
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
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
