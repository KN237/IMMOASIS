<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EtatLieux extends Model
{
    use HasFactory;

    public $table='etat_des_lieux';

    public $primaryKey='idEtatLieu';

    protected $fillable = [
        'idbien',
        'descriptionetatlieu',
        'datedebutetatlieu',
        'datefinetatlieu',
        'signBailleur',
        'signLocataire' 
    ];
}
