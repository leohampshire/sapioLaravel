@extends('layout')

@section('cabecalho')
    Library Test
@endsection

@section('content')

    @auth()
        <a href="{{ route('user-libraries.create') }}" class="btn btn-dark mb-2">Adicionar</a>
    @endauth

    <ul class="list-group">
        @forelse($userLibraries as $library)
            <div class="d-flex">
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    <span id="nome-library-{{ $library->id }}">{{ $library->name }}</span>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    <span id="description-library-{{ $library->id }}">{{ $library->description }}</span>
                </li>
            </div>
            @endforeach
    </ul>

    <script>

        function toggleInput(libraryId) {
            const nomeLibraryEl = document.getElementById(`nome-library-${libraryId}`);
            const inputLibraryEl = document.getElementById(`input-nome-library-${libraryId}`);
            if (nomeLibraryEl.hasAttribute('hidden')) {
                nomeLibraryEl.removeAttribute('hidden');
                inputLibraryEl.hidden = true;
            } else {
                inputLibraryEl.removeAttribute('hidden');
                nomeLibraryEl.hidden = true;
            }
        }

        function editarLibrary(libraryId) {
            let formData = new FormData();
            const nome = document
                .querySelector(`#input-nome-library-${libraryId} > input`)
                .value;
            const token = document
                .querySelector(`input[name="_token"]`)
                .value;
            formData.append('nome', nome);
            formData.append('_token', token);
            const url = `/user-libraries/${libraryId}/editaNome`;
            //const url = route('editaNome');
            fetch(url, {
                method: 'POST',
                body: formData
            }).then(() => {
                toggleInput(libraryId);
                document.getElementById(`nome-library-${libraryId}`).textContent = nome;
            });
        }

    </script>
@endsection
