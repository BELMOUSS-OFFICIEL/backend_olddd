<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use App\Models\Immobiliere;
use Illuminate\Http\Request;
use App\Models\Reservatio;
use App\Models\User;

class ReservationController extends Controller
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
        $reservations = Reservatio::with('immobiliere')->orderBy('dateReservation','desc')->paginate(10);
        // dd($reservations);
        $active=0;
        return view('pages.reservations.index', compact('reservations','active'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        // return view('pages.reservations.create');
        return redirect()->route('reservations.index');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        return redirect()->route('reservations.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $reservation = Reservatio::find($id);

         if($reservation){
            $user_id=$reservation->profile->user_id;
            $email=User::find($user_id)->email;
            $reservation->email=$email;
         }
         
        //  dd($reservation->reservationsrolation->relation);
        // if ($reservation->immobiliere && $reservation->profile) {
        //     return view('pages.reservations.show', compact('reservation'));
        // }

        $valider='0';

if($reservation->etate!=='valider'){
    $valider=1;
    return view('pages.reservations.show', compact('reservation','valider'));
}
        return view('pages.reservations.show', compact('reservation','valider'));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        // $reservation = Reservatio::find($id);
        // return view('pages.reservations.edit',compact('reservation'));

        return redirect()->route('reservations.index');
    }


    public function filterEtate(string $etate){

      if($etate==0){
          $reservations=Reservatio::with('immobiliere')->orderBy('dateReservation','desc')->paginate(10);
          $active=0;
      }else{
          $reservations = Reservatio::where('etate', $etate)->paginate(10);
        if($reservations){
          $active=$reservations[0]->etate;
        }
      }
      return view('pages.reservations.index',compact('reservations','active'));
  }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        // dd($request);
if($request->etate){
    $reservation = Reservatio::find($id);
    $reservation->etate='valider';
    $immobilier=Immobiliere::find($reservation->immobiliere_id);
    // dd($immobilier);
    $immobilier->disponeble=false;
    $reservation->save();
    $immobilier->save();
    $error='reservation est valide';
    // return view('pages.reservations.show',compact('reservation','error'));
    return redirect()->route('reservations.show',$id)->with('success',$error);
}else{
        $reservation = Reservatio::find($id);
        $error='';
        if($request->dateDebut<=$request->dateFin){
        $reservation->dateDebut=$request->dateDebut;
        $reservation->dateFin=$request->dateFin;
        $save=$reservation->save();
        if($save){
            $error='bien modifier';
        }

        }else{
            $error='il n\'a pas été modifié!';
        }
        // return view('pages.reservations.show',compact('reservation','error'));
    return redirect()->route('reservations.show',$id)->with('error',$error);

    }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $reservation=Reservatio::find($id);
        $immobilier=Immobiliere::find($reservation->immobiliere_id);
        $immobilier->disponeble=true;
      
        $immobilier->save();
        Reservatio::destroy($id);
      
        return redirect()->route('reservations.index');
    }

    // public function valideReservation(Request $request, string $id){

    //     $reservation = Reservatio::find($id);
    //     dd($reservation);
    // }
}
