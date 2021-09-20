<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Facture extends Model
{
    use HasFactory;

    public $table='facture';   public $timestamps=FAlSE;

    public $primaryKey='idfacture';

    protected $fillable = [
        'idlocation',
        'date',
        'datedebut',
        'datefin',
        'datelimite',
        'etat'
      
    ];
}
