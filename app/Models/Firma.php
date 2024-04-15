<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Firma extends Model
{
    use HasFactory;

    public function pracownicy()
    {
        return $this->hasMany(Pracownik::class, 'id_firmy');
    }

    protected $table = 'firmy';

    protected $fillable = [
        'nazwa', 'adres', 'nip', 'opis'
    ];

    protected $dates = [
        'data_dodania',
    ];
}
