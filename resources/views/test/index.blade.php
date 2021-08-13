@extends('layout')

@section('cabecalho')
    Séries
@endsection


@section('content')

    <a href="{{ route('series.create') }}" class="btn btn-dark mb-2">Adicionar</a>

    <ul class="list-group">
        @forelse($series as $serie)
            <li class="list-group-item d-flex justify-content-between align-items-center">
                <span id="nome-serie-{{ $serie->id }}">{{ $serie->nome }}</span>
                <div class="input-group w-50" hidden id="input-nome-serie-{{ $serie->id }}">
                    <input type="text" class="form-control" value="{{ $serie->nome }}">
                    <div class="input-group-append">
                        <button class="btn btn-primary" onclick="editarSerie({{ $serie->id }})">
                            <i class="fas fa-check"></i>
                        </button>
                        @csrf
                    </div>
                </div>

                <span class="d-flex">
                <button class="btn btn-info btn-sm me-1" onclick="toggleInput({{ $serie->id }})">
                    <i class="fas fa-external-link-alt"> Edit</i>
                </button>
                <a href="{{ route('temporadas.index', ['serieId' => $serie->id]) }}" class="btn btn-info btn-sm me-1">
                    <i class="fas fa-external-link-alt"> Temps</i>
                </a>

                <form action="/series/{{$serie->id}}"
                      method="post"
                      onsubmit="return confirm('Confirmar exclusão de {{addslashes($serie->nome)}}?')">
                    @csrf
                    @method('DELETE') <!--HTML nao aceita method no cabecalho fora get and post-->
                    <button class="btn btn-danger btn-sm">
                        <i class="fas fa-trash-alt"> Excluir</i>
                    </button>
                </form>
                </span>
            </li>
            @endforeach
    </ul>

    <script>

        function toggleInput(serieId) {
            const nomeSerieEl = document.getElementById(`nome-serie-${serieId}`);
            const inputSerieEl = document.getElementById(`input-nome-serie-${serieId}`);
            if (nomeSerieEl.hasAttribute('hidden')) {
                nomeSerieEl.removeAttribute('hidden');
                inputSerieEl.hidden = true;
            } else {
                inputSerieEl.removeAttribute('hidden');
                nomeSerieEl.hidden = true;
            }
        }

        function editarSerie(serieId) {
            let formData = new FormData();
            const nome = document
                .querySelector(`#input-nome-serie-${serieId} > input`)
                .value;
            const token = document
                .querySelector(`input[name="_token"]`)
                .value;
            formData.append('nome', nome);
            formData.append('_token', token);
            const url = `/series/${serieId}/editaNome`;
            //const url = route('editaNome');
            fetch(url, {
                method: 'POST',
                body: formData
            }).then(() => {
                toggleInput(serieId);
                document.getElementById(`nome-serie-${serieId}`).textContent = nome;
            });
        }

    </script>
@endsection
