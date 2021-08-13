<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Temporada extends Model
{
    use HasFactory;

    protected $fillable = [
        'numero'
    ];

    public function getSerie()
    {
        return $this->belongsTo(Serie::class);
    }

    public function getEpisodios()
    {
        return $this->hasMany(Episodio::class);
    }

    public function getEpisodiosAssistidos(): Collection
    {
        return $this->getEpisodios->filter(function (Episodio $episodio) {
            return $episodio->assistido;
        });
    }
}
