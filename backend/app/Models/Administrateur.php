<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Administrateur extends Model
{
    use HasFactory;

    public $table='administrateur';
    public $timestamps=FALSE;
    public $primaryKey='idadmin';
    protected $fillable = [
        'idu',
    ];

}
