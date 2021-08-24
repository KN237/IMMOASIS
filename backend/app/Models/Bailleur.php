<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bailleur extends Model
{
    use HasFactory;

    public $table='bailleur';

    protected $fillable = [
        'numCniBailleur',
        'telephoneSecBailleur',
        'villeBailleur',
        'quartierBailleur',
        'paysBailleur',
        'dateNaissBailleur',
        'lieuNaissBailleur',
        'nomCompletRep',
        'numCniRep',
        'SignatureBailleur',
    ];
}
