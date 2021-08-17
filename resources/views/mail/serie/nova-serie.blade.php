@component('mail::panel')
    #Nova Série
    ###Nome da Série {{ $nome }}
@endcomponent

@component('mail::message')
    Número de temporadas:
    Número de Episódios por temporadas:
@endcomponent

@component('mail::table')
    | TESTE       | Table         | Example  |
    | ------------- |:-------------:| --------:|
    | {{ $qtd_temporadas }}      | Centered      | $10      |
    | {{ $ep_por_temporada }}      | Right-Aligned | $20      |
@endcomponent
