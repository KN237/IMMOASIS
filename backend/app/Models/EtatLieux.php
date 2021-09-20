<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EtatLieux extends Model
{
    use HasFactory;

    public $table='etat_des_lieux';   public $timestamps=FAlSE;

    public $primaryKey='idEtatLieu';

    protected $fillable = [
        'idbien',
        'description',
        'datedebut',
        'datefin',
        'signbailleur',
        'signlocataire' 
    ];
}
