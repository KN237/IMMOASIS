<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Locataire extends Model
{
    use HasFactory;
    public $table='locataire';
    public $timestamps=FALSE;
    protected $fillable = [
        'numCniLoc',
        'telephoneSecLoc',
        'villeLoc',
        'quartierLoc',
        'paysLoc',
        'dateNaissLoc',
        'sexeLoc',
        'lieuNaissLoc',
        'nomCompletEmployeurLoc',
        'telEmployeurLoc',
        'signatureLoc',
        'professionLoc',
        'revenuMensuelLoc',
        'signatureLocataire',
        'idu'
    ];
}
