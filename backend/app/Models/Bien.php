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
        'nombien',
        'idtypebien',
        'idbailleur',
        'numtitrefoncier',
        'numpermisconst',
        'descriptionbien',
        'imagebien',
        'superficiebien',
        'etatbien',
        'villebien',
        'paysbien',
        'quartierbien'
    ];
}
