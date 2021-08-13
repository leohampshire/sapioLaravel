<?php


namespace App\Helper\Serie;


use App\Models\Episodio;
use App\Models\Temporada;

class TemporadaHelper
{
    /**
     * @param Temporada $temporada
     */
    public function removerTemporada(Temporada $temporada): void
    {
        $temporada->getEpisodios()->each(function (Episodio $episodio) {
            $episodio->delete();
        });
        $temporada->delete();
    }

}
