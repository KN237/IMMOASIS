<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    use HasFactory;

    public $table='package';
    public $primaryKey='idpackage';
    protected $fillable = [
        'nom',
        'nombrebienmax',
        'montant',
        
    ];
}
