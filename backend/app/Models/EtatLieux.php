<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EtatLieux extends Model
{
    use HasFactory;

    public $table='etat_des_lieux';

    protected $fillable = [
        'idBien',
        'descriptionEtatLieu',
        'dateEtatLieu',
      
    ];
}
