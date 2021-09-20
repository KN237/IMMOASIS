<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bien extends Model
{
    use HasFactory;

    public $table='bien';

    public $primaryKey='idbien';   public $timestamps=FAlSE;

    protected $fillable = [
        'nom',
        'idtb',
        'idbailleur',
        'numtitrefoncier',
        'numpermisconst',
        'description',
        'image',
        'superficie',
        'ville',
        'quartier'
    ];
}
