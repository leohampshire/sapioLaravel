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

class EpisodioHelper
{

    public $temporadaHelper;

    public function __construct()
    {
        $this->temporadaHelper = new TemporadaHelper();
    }

    public function create(): Episodio
    {
        DB::beginTransaction();
        $episodio = Episodio::create([
            /**/
        ]);
        DB::commit();

        return $episodio;
    }

    public function destroy(int $id): string
    {
        DB::beginTransaction();
        $episodio = Episodio::query()->find($id);

        Episodio::destroy($episodio->id);

        DB::commit();

        return $episodio->nome;
    }
}
