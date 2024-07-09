<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
         'cin',
          'nom',
           'prenom',
            'tele',
            'user_id',

    ];

    protected $hidden = [

      'created_at',
      'updated_at',

  ];
    // public function user() {
    //     //Une adresse appartient à un fournisseur
    //     return $this->belongsTo(User::class);
    //     }

}
