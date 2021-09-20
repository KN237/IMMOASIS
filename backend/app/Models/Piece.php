<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Piece extends Model
{
    use HasFactory;

    public $table='piece';   public $timestamps=FAlSE;

    public $primaryKey='idpiece';

    protected $fillable = [
      
        'nom',
        'idbien',
    ];
}
