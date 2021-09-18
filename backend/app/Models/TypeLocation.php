<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TypeLocation extends Model
{
    use HasFactory;

    public $table='type_de_location';

    protected $fillable = [
      
        'nom',
       
    ];

    public $primaryKey='idtl';

}
