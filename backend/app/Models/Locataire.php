<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class locataire extends Model
{
    use HasFactory;
    public $table='locataire';
    public $primaryKey='idlocataire';
    public $timestamps=FAlSE;
    protected $fillable = [
        'numcni',
        'ville',
        'quartier',
        'pays',
        'datenaiss',
        'sexe',
        'nomemployeur',
        'telemployeur',
        'signature',
        'profession',
        'idu'
    ];
}
