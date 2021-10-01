<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Validite extends Model
{
    use HasFactory;

    public $table='validitepackage';

    public $primaryKey='idvp';

    protected $fillable = [
        'idu',
        'idpackage',
        'datesous',
        'dateexp', 
    ];
}
