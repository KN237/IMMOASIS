<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Piece extends Model
{
    use HasFactory;

    public $table='piece';

    protected $fillable = [
      
        'nomPiece',
        'idBien'
    ];
}
