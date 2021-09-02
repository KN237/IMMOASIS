<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contrat extends Model
{
    use HasFactory;

    public $table='contrat';

    protected $fillable = [
        'idbien',
        'signBailleur',
        'signLocataire'
    ];
}
