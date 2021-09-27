<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Equipement extends Model
{
    use HasFactory;

    public $table='equipement';

    public $primaryKey='idequipement';   public $timestamps=FAlSE;

    protected $fillable = [
        'idpiece',
        'nom',
        'prix',
        'quantite'

    ];
}
