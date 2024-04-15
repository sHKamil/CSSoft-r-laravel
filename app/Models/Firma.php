<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Firma extends Model
{
    use HasFactory;

    protected $table = 'firmy';

    protected $fillable = [
        'nazwa', 'adres', 'nip', 'opis'
    ];

    protected $dates = [
        'data_dodania',
    ];
}
