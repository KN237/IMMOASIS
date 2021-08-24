<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inventaire extends Model
{
    use HasFactory;
    public $table='inventaire';

    protected $fillable = [
        'idBien',
        'descriptionInventaire',
        'dateInventaire',
      
    ];
}
