<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Train extends Model
{
    use HasFactory;

    protected $fillable = [
        'azienda',
        'stazione_di_partenza',
        'stazione_di_arrivo',
        'codice_treno',
        'numero_carrozze',
        'in_orario',
        'cancellato',
    ];
}
