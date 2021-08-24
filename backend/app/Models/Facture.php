<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Facture extends Model
{
    use HasFactory;

    public $table='facture';
    protected $fillable = [
        'idLocation',
        'dateFacture',
        'montantFacture',
        'etatFacture'
      
    ];
}
