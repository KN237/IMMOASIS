<?php

namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use phpDocumentor\Reflection\PseudoTypes\False_;

class Utilisateur extends Model
{
    
    use  HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $fillable = [
        'nomU',
        'nomCompletU',
        'emailU',
        'mdpU',
        'telephoneU',
        'idPackage',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'mdpU',
        
    ];

    public $timestamps=FALSE;

    public $table='utilisateur';
}
