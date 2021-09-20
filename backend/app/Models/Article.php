<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;
    
    public $table='article';

    public $primaryKey='idarticle';   public $timestamps=FAlSE;

    protected $fillable = [
        'idbailleur',
        'titre',
        'description'
    ];
}
