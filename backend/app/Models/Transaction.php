<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    public $table='transaction';

    public $primaryKey='idtransaction';

    protected $fillable = [
        'idu',
        'reference',
        'date', 
        'mode',
        'initiateur',
    ];
}
