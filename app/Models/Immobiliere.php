<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Immobiliere extends Model
{
    use HasFactory;
    protected $fillable=['nom','adresse','sector','prix','prixParJour','type_id','categorie_id','description','nbrChamber','nprToilets','proprietaire_id'];
   

    public function proprietaire(){
        return $this->belongsTo(Proprietaire::class);
    }
    public function type(){
        return $this->belongsTo(Type::class);
    }
    public function categorie(){
        return $this->belongsTo(Categorie::class);
    }
    public function medias(){
        return $this->hasMany(Media::class);
    }

    public function reservatios(){
      return $this->hasMany(Reservatio::class);
  }

  
  public function achates(){
    return $this->hasMany(Achate::class);
}
}
