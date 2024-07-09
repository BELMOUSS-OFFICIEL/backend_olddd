<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use App\Models\Reservatio;
use App\Models\Achate;
use App\Models\Immobiliere;
use App\Models\Profile;
use App\Mail\virefierMail;
use Illuminate\Support\Facades\Mail;

class IndexController extends Controller
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
        $achates=Achate::with('immobiliere')->where('etate',2)->orderBy('dateReservation','desc')->limit(5)->get();
        $achatesLengts=Achate::with('immobiliere')->where('etate',2)->get();
        $profile=Profile::all();
        // dd($achates);
        // $mailer=new virefierMail();
        // Mail::to('nititayniti@gmail.com')->send(new virefierMail());
// dd($mailer->content());
        $immobilier=Immobiliere::where('disponeble','=',true)->get();
        $reservations = Reservatio::with('immobiliere')->where('etate','en cours')->orderBy('dateReservation','desc')->limit(5)->get();
        $reservationslengt = Reservatio::with('immobiliere')->where('etate','en cours')->get();
        // dd($reservations);
        return view('index', compact('reservations','achates','reservationslengt','achatesLengts','immobilier','profile'));
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
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
