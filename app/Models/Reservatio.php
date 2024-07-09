<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservatio extends Model
{
    use HasFactory;
    protected $fillable=[
        'dateReservation',	'dateDebut',	'dateFin',	'nbPerssonnes',	'etate',	'reservationsrolation_id',	'profile_id',	'immobiliere_id'
    ];
    // public $timestamps=false;


    public function profile(){
        return $this->belongsTo(Profile::class);
    }




    public function immobiliere(){
        return $this->belongsTo(Immobiliere::class);
    }


    public function reservationsrolation(){
        return $this->belongsTo(Reservationsrolation::class);
    }
}
