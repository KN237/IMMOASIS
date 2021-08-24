<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artisan extends Model
{
    use HasFactory;
    public $table='artisan';

    protected $fillable = [
        'idAdmin',
        'nomCompletArtisan',
        'professionArtisan',
        'telephoneArtisan',
    ];
}
