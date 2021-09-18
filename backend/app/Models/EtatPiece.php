<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EtatPiece extends Model
{
    use HasFactory;

    public $table='etatpiece';

    public $primaryKey='idep';

    protected $fillable = [
        'idpiece',
        'date',
        'valeur', 
        'commentaire'
    ];
}
