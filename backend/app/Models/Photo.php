<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    use HasFactory;

    public $table='photo';   public $timestamps=FAlSE;

    public $primaryKey='idphoto';

    protected $fillable = [
        'idbien',
        'nom'
    ];


}
