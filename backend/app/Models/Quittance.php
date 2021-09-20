<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quittance extends Model
{
    use HasFactory;

    public $table='quittance';   public $timestamps=FAlSE;

    public $primaryKey='idquittance';

    protected $fillable = [
        'idfacture'

    ];
}
