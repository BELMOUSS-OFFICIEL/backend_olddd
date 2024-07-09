<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\models\Immobiliere;
use App\Models\Proprietaire;
use App\Models\Media;
use App\Http\Requests\ImmobilierRequest;
use App\Models\Vedio;

class ImmobiliersController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function index()
    {
        //
        $immobilieres = Immobiliere::where('disponeble' ,'=',true)->orderBy('id', 'desc')->paginate(9);

        // dd($immobilieres);
        if ($immobilieres) {
            return view('pages.immobiliers.index', compact('immobilieres'));
        } else {
            return view('auth.errore');
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('pages.immobiliers.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ImmobilierRequest $request)
    {
        //
        $propr = DB::table('proprietaires')
            ->where('cin', $request->cin)
            ->first();

        if ($propr) {
            $imoo = Immobiliere::create([
                'nom' => $request->nom,
                'adresse' => $request->adresse,
                'prix' => $request->prix,
                'sector' => $request->sector,
                'prixParJour' => $request->prixParJour,
                'categorie_id' => $request->categorie_id,
                'type_id' => $request->type_id,
                'description' => $request->description,
                'nbrChamber' => $request->nbrChamber,
                'nprToilets' => $request->nprToilets,
                'proprietaire_id' => $propr->id,
            ]);
            if ($imoo) {
                foreach ($request->images as $image) {
                    $img = $image->store('medias', 'public');

                    Media::create([
                        'src' => $img,
                        'immobiliere_id' => $imoo['id'],
                    ]);
                }
              
            }


        } else {
            $prop = Proprietaire::create([
                'cin' => $request->cin,
                'nom' => $request->nomp,
                'prenom' => $request->prenom,
                'tele' => $request->tele,
                'email' => $request->email,
            ]);

            if ($prop) {
                $imoo = Immobiliere::create([
                    'nom' => $request->nom,
                    'adresse' => $request->adresse,
                    'prix' => $request->prix,
                    'sector' => $request->sector,
                    'prixParJour' => $request->prixParJour,
                    'categorie_id' => $request->categorie_id,
                    'type_id' => $request->type_id,
                    'description' => $request->description,
                    'nbrChamber' => $request->nbrChamber,
                    'nprToilets' => $request->nprToilets,
                    'proprietaire_id' => $prop['id'],
                ]);
                foreach ($request->images as $image) {
                    $img = $image->store('medias', 'public');

                    Media::create([
                        'src' => $img,
                        'immobiliere_id' => $imoo['id'],
                    ]);
                }

              
                
            }
        }
        return redirect()->route('immobiliers.index')->with('success', 'bien ajouter un nouveau immobilaier ');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $immobiliere = Immobiliere::find($id);
        // dd($immobiliere);
        if ($immobiliere) {
            return view('pages.immobiliers.show', compact('immobiliere'));
        } else {
            return view('pages.immobiliers.notFondImmobilier');
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        return view('pages.immobiliers.edit');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $immobiliere = Immobiliere::find($id);
        $immobiliere->nom = $request->nom;
        $immobiliere->adresse = $request->adresse;
        $immobiliere->sector = $request->sector;
        $immobiliere->description = $request->description;
        $immobiliere->prix = $request->prix;
        $immobiliere->type_id = $request->type_id;
        $immobiliere->prixParJour = $request->prixParJour;
        $immobiliere->nbrChamber = $request->nbrChamber;
        $immobiliere->nprToilets = $request->nprToilets;
        $immobiliere->save();
        return redirect()->route('immobiliers.show', $id)->with('success', 'Immobilier est bien modifier ');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //

        if (Immobiliere::destroy($id)) {
            return redirect()->route('immobiliers.index')->with('success', 'Immobilier est bien supprimer');
        }
    }
}
