<?php


namespace App\Helper\Serie;


use App\Http\Requests\SeriesFormRequest;
use App\Models\Episodio;
use App\Models\Serie;
use App\Models\Temporada;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use phpDocumentor\Reflection\Types\Integer;

class SerieHelper
{

    public $temporadaHelper;

    public function __construct()
    {
        $this->temporadaHelper = new TemporadaHelper();
    }

    public function create(string $nome,
                           int $qtd_temporadas,
                           int $ep_por_temporada): Serie
    {
        DB::beginTransaction();
        $serie = Serie::create([
            'nome' => $nome
        ]);

        for ($i = 1; $i <= $qtd_temporadas ; $i++){
            $temporada =  $serie->getTemporadas()->create(['numero' => $i]);

            for ($j = 0; $j <= $ep_por_temporada ; $j++){
                $episodio = $temporada->getEpisodios()->create(['numero' => $j]);
            }
        }
        DB::commit();

        return $serie;
    }

    public function destroy(int $id): string
    {
        DB::beginTransaction();
        $serie = Serie::query()->find($id);

        $this->removerSerie($serie);

        DB::commit();

        return $serie->nome;
    }

    /**
     * @param Model|Collection|Builder|array|null $serie
     */
    public function removerSerie(Model|Collection|Builder|array|null $serie): void
    {
        $serie->getTemporadas->each(function (Temporada $temporada) {
            $this->temporadaHelper->removerTemporada($temporada);
        });
        Serie::destroy($serie->id);
    }
}
