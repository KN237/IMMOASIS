<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class locataire extends Model
{
    use HasFactory;
    public $table='locataire';
    public $primaryKey='idlocataire';
    public $timestamps=FAlSE;
    protected $fillable = [
        'numcniloc',
        'telephoneSecloc',
        'villeloc',
        'quartierloc',
        'paysloc',
        'datenaissloc',
        'sexeloc',
        'lieunaissloc',
        'nomcompletemployeurloc',
        'telemployeurloc',
        'signatureloc',
        'professionloc',
        'revenumensuelloc',
        'idu'
    ];
}
