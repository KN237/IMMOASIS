<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invitation extends Model
{
    use HasFactory;

    public $table='invitation';

    public $primaryKey='idinvitation';


    public $timestamps=FAlSE;

    protected $fillable = [
        'idlocataire',
        'idbailleur',
        'valeur', 
        'date',
    ];
}
