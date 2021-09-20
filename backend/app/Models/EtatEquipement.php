<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EtatEquipement extends Model
{
    use HasFactory;

    public $table='etatequipement';   public $timestamps=FAlSE;

    public $primaryKey='idee';

    protected $fillable = [
        'idequipement',
        'date',
        'valeur', 
        'commentaire'
    ];
}
