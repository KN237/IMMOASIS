<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Equipement extends Model
{
    use HasFactory;

    public $table='equipement';

    protected $fillable = [
        'idPiece',
        'nomEquipement',
        'etatEquipement',
        'prixEquipement',
        'commentaire'
      
    ];
}
