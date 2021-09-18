<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Renovation extends Model
{
    use HasFactory;

    public $table='renovation';

    public $primaryKey='idrenovation';

    protected $fillable = [
        'idu',
        'idartisan',
        'motif',
        'domaine',
        'description',
        'montant',
        'priorite',
        'statut',
      
    ];

}
