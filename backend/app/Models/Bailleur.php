<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bailleur extends Model
{
    use HasFactory;

    public $table='bailleur';
    public $timestamps=FALSE;

    protected $fillable = [
        'numcnibailleur',
        'telephonesecbailleur',
        'villebailleur',
        'quartierbailleur',
        'paysbailleur',
        'datenaissbailleur',
        'lieunaissbailleur',
        'nomcompletrep',
        'numcnirep',
        'signaturebailleur',
    ];
}
