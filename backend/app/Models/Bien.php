<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bien extends Model
{
    use HasFactory;

    public $table='bien';

    public $primaryKey='idbien';

    protected $fillable = [
        'nomBien',
        'idTypeBien',
        'idU',
        'idBailleur',
        'numTitreFoncier',
        'numPermisConst',
        'descriptionBien',
        'imageBien',
        'superficieBien',
        'etatBien',
        'villeBien',
        'paysBien',
        'quartierBien'
    ];
}
