<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Renovation extends Model
{
    use HasFactory;

    public $table='renovation';

    protected $fillable = [
        'idBien',
        'motifRenovation',
        'domaineRenovation',
        'descriptionRenovation',
        'montantRenovation',
        'priorite',
        'statut',
      
    ];

}
