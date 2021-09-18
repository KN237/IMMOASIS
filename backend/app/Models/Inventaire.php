<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inventaire extends Model
{
    use HasFactory;
    public $table='inventaire';

    public $primaryKey='idinventaire';

    protected $fillable = [
        'idbien',
        'description',
        'date',
        'signbailleur',
        'signlocataire'
      
    ];
}
