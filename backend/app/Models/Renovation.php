<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Renovation extends Model
{
    use HasFactory;

    public $table='renovation';

    public $timestamps=FAlSE;

    public $primaryKey='idrenovation';

    protected $fillable = [

        'idbien',
        'idu',
        'idartisan',
        'libelle',
        'description',
        'montant',
        'date',
        'statut',
      
    ];

}
