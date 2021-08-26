<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    use HasFactory;
    public $table='location';
    protected $fillable = [
        'utilisation',
        'activiteLocation',
        'idU',
        'idLocataire',
        'idTl',
        'idBien',
        'dateDebutLocation',
        'dureeLocation',
        'montantLocation',
        'montantCaution'
    ];
}
