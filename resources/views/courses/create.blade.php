@extends('layout')

@section('cabecalho')
    <h1>Adicionar Série</h1>
@endsection

@section('content')
    <form action="{{ route('courses.store') }}" method="post">
    @csrf <!--Envio  de token de verificação-->
        <div class="row form-group">
            <div class="col col-8">
                <label for="name" class="label">Name</label>
                <input type="text" class="form-control mb-2" name="name" id="name">
            </div>
        </div>
        <div class="row form-group">
            <div class="col col-8">
                <label for="description" class="label">description</label>
                <textarea type="text" class="form-control mb-2" name="description" id="description" aria-label="With textarea"></textarea>
            </div>
        </div>

        <button class="btn btn-primary">Adicionar</button>
    </form>
@endsection
