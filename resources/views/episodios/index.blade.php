@extends('layout')

@section('cabecalho')
    Episodios da Temporada {{ $temporada->numero }}
@endsection

@section('content')

    <form action="{{ route('episodios.setAssistidos', ['temporada' => $temporada->id]) }}" method="post">
        @csrf
        <ul class="list-group">
            @foreach($temporada->getEpisodios as $episodio)
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    Episodio {{$episodio->numero}}

                    <input type="checkbox"
                           name="episodios[]"
                           value="{{ $episodio->id }}"
                        {{ $episodio->assistido ? 'checked' : '' }}>
                </li>
            @endforeach
        </ul>

        <button class="btn btn-primary mt-2">Salvar</button>
    </form>
@endsection
