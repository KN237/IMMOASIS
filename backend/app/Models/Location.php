<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    use HasFactory;
    public $table='location';
    protected $fillable = [
        'utilisation',
        'activitelocation',
        'idlocataire',
        'idtl',
        'idbien',
        'datedebutlocation',
        'dureelocation',
        'montantlocation',
        'montantcaution'
    ];
}
