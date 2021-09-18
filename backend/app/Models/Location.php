<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    use HasFactory;
    public $table='location';
    
    public $primaryKey='idlocation';

    public $timestamps=FALSE;

    protected $fillable = [
        'utilisation',
        'activite',
        'idlocataire',
        'idtl',
        'idbien',
        'duree',
        'montant',
        'montantcaution'
    ];
}
