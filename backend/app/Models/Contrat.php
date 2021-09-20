<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contrat extends Model
{
    use HasFactory;

    public $table='contrat';

    public $primaryKey='idcontrat';   public $timestamps=FAlSE;

    protected $fillable = [
        'idbien',
        'signbailleur',
        'signlocataire'
    ];
}
