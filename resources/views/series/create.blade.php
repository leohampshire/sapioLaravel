@extends('layout')

@section('cabecalho')
    <h1>Adicionar Série</h1>
@endsection

@section('content')
    <form action="{{ route('series.store') }}" method="post">
    @csrf <!--Envio  de token de verificação-->
        <div class="row form-group">
            <div class="col col-8">
                <label for="nome" class="label">Nome</label>
                <input type="text" class="form-control mb-2" name="nome" id="nome">
            </div>
            <div class="col col-2">
                <label for="qtd_temporadas" class="label">Número de Temporadas</label>
                <input type="number" class="form-control mb-2" name="qtd_temporadas" id="qtd_temporadas">
            </div>
            <div class="col col-2">
                <label for="ep_por_temporada" class="label">Ep. por Temporada</label>
                <input type="number" class="form-control mb-2" name="ep_por_temporada" id="ep_por_temporada">
            </div>
        </div>

        <button class="btn btn-primary">Adicionar</button>
    </form>
@endsection
