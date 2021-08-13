<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Serie extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome'
    ];

    public function getTemporadas()
    {
        return $this->hasMany(Temporada::class);
    }
}
