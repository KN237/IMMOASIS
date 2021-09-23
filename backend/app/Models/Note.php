<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    use HasFactory;

    public $table='note';   public $timestamps=FAlSE;

    public $primaryKey='idnote';

    protected $fillable = [
        'idartisan',
        'valeur',
        'idu'
      
    ];
}
