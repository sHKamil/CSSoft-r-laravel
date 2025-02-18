<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pracownik extends Model
{
    use HasFactory;

    protected $table = 'pracownicy';

    protected $fillable = [
        'id_firmy', 'imie', 'nazwisko', 'telefon', 'email', 'opis'
    ];

    protected $dates = [
        'data_dodania',
    ];

    public function firma()
    {
        return $this->belongsTo(Firma::class, 'id_firmy');
    }
}