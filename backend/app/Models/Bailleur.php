<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bailleur extends Model
{
    use HasFactory;

    public $table='bailleur';

    public $primaryKey='idbailleur';

    public $timestamps=FALSE;

    protected $fillable = [
        'numcni',
        'ville',
        'quartier',
        'pays',
        'datenaiss',
        'nomrep',
        'telrep',
        'signature',
    ];
}
