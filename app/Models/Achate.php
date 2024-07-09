<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Achate extends Model
{
    use HasFactory;
  


    protected $fillable=['dateReservation','profile_id','immobiliere_id'];


    public function profile(){
        return $this->belongsTo(Profile::class);
    }




    public function immobiliere(){
      return $this->belongsTo(Immobiliere::class);
  }
}
