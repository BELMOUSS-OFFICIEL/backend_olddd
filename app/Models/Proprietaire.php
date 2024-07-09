<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proprietaire extends Model

{
    use HasFactory;
    protected $fillable=['cin', 'nom', 'prenom', 'tele', 'email'];
    // public $timestamps=false;
}
