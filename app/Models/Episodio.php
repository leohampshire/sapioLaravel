<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Episodio extends Model
{
    use HasFactory;

    protected $fillable = [
        'numero',
        'assistido'
    ];

    public function getTemporada()
    {
        $this->belongsTo(Temporada::class);
    }
}
