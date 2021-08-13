<?php

namespace App\Http\Controllers\Series;

use App\Http\Controllers\Controller;
use App\Models\Episodio;
use App\Models\Serie;
use App\Models\Temporada;
use Illuminate\Http\Request;

class EpisodiosController extends Controller
{
    public function index(Temporada $temporada, Request $request)
    {
        $mensagem = $request->session()->get('mensagem');
        $episodios = $temporada->getEpisodios;

        return view('episodios.index',
            compact('temporada', 'mensagem'));
    }

    public function setAssistidos(Temporada $temporada, Request $request)
    {
        $episodiosAssistidos = $request->episodios;
        $temporada->getEpisodios->each(function (Episodio $episodio) use ($episodiosAssistidos) {
            $episodio->assistido = in_array(
                $episodio->id,
                $episodiosAssistidos
            );
        });
        $temporada->push();

        $request->session()->flash('mensagem',  'Episódios marcados como assistidos');

        return redirect()->back();
    }
}
