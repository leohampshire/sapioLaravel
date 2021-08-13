@extends('layout')

@section('cabecalho')
    Temporadas de {{ $serie->nome }}
@endsection

@section('content')

    <ul class="list-group">
        @foreach($temporadas as $temporada)
            <li class="list-group-item d-flex justify-content-between align-items-center">
                <a href="{{ route('episodios.index', ['temporada' => $temporada->id]) }}">
                    Temporada {{$temporada->numero}}
                </a>
                <span class="badge bg-secondary">
                    {{ $temporada->getEpisodiosAssistidos()->count() }} / {{ $temporada->getEpisodios->count() }}
                </span>
            </li>
            @endforeach
    </ul>
@endsection
