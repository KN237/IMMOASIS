<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artisan extends Model
{
    use HasFactory;
    
    public $table='artisan';

    public $primaryKey='idartisan';

    protected $fillable = [
        'idadmin',
        'nomcomplet',
        'profession',
        'telephone',
    ];
}
