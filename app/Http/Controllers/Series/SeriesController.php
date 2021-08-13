<?php


namespace App\Http\Controllers\Series;


use App\Helper\Serie\SerieHelper;
use App\Http\Controllers\Controller;
use App\Http\Requests\SeriesFormRequest;
use App\Models\Serie;
use App\Models\Temporada;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SeriesController extends Controller
{

    private $serieHelper;

    public function __construct()
    {
        $this->serieHelper = new SerieHelper();

        //$this->middleware('auth');
    }

    public function index(Request $request)
    {
        //$series = Serie::query()->orderBy('nome')->get();
        $series = Serie::all()
            ->sortBy('nome');

        $mensagem = $request
            ->session()->get('mensagem');

        return view('series.index',
            compact(
                'series',
                'mensagem') //          'series' => $series, 'mensagem'= $mensagem ...
        );
    }

    public function create()
    {
        return view('series.create');
    }

    public function store(
        SeriesFormRequest $request)
    {
        $serie = $this->serieHelper->create(
            $request->nome,
            $request->qtd_temporadas,
            $request->ep_por_temporada
        );

        $request->session()
            ->flash(   //put (manda pra sessao e nao sai da sessao, flash dura uma sessao)
                'mensagem',
                "Série {$serie->nome} criada com sucesso!");

        return redirect()
            ->route('series.index');
    }

    public function destroy(Request $request)
    {

        $serieName =  $this->serieHelper->destroy($request->id);

        $request->session()
            ->flash(   //put (manda pra sessao e nao sai da sessao, flash dura uma sessao)
                'mensagem',
                "Série $serieName removida com sucesso!");

        return redirect()
            ->route('series.index');
    }

    public function editaNome(int $id , Request $request)
    {
        $novoNome = $request->nome;
        $serie = Serie::query()->find($id);
        $serie->nome = $novoNome;
        $serie->save();
    }

}
