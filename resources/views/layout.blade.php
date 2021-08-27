<!doctype html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Controle de Séries</title>

    <link rel="stylesheet" href="/assets/bootstrap/dist/css/bootstrap.min.css">
    <!--link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous"-->
    <link rel="stylesheet" href="/assets/fontawesome-free-5.15.4-web/css/all.css">


    <!--Fonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;700&family=Open+Sans:wght@300;400;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="/css/home/reset.css">
    <link rel="stylesheet" href="/css/home/base.css">
    <link rel="stylesheet" href="/css/header/cabecalho.css">
    <link rel="stylesheet" href="/css/home/chamada.css">
    <link rel="stylesheet" href="/css/home/chamada-img.css">
    <link rel="stylesheet" href="/css/home/destaques.css">
    <link rel="stylesheet" href="/css/home/diferenciais.css">
    <link rel="stylesheet" href="/css/home/parceiros.css">
    <link rel="stylesheet" href="/css/home/sobre.css">
    <link rel="stylesheet" href="/css/home/contato.css">
    <link rel="stylesheet" href="/css/home/institucional.css">
    <link rel="stylesheet" href="/css/home/rodape.css">
    <link rel="stylesheet" href="/css/home/macrotemas.css">
    <link rel="stylesheet" href="/css/home/macrotemas-card.css">
    <link rel="stylesheet" href="/css/home/resources/carousel.css">
    <link rel="stylesheet" href="/css/home/resources/card.css">
    <link rel="stylesheet" href="/css/home/resources/row.css">
    <link rel="stylesheet" href="/css/home/resources/button.css">
</head>

<body>
<script src="/assets/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<!--script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous">
</script-->

@include('includes.header')

<main class="">
    <div class="">
        <div class="p-3" style="background: gray">
            <h1>@yield('cabecalho')</h1>
        </div>

        @include('includes/mensagem')

        @yield('content')
    </div>
</main>

@include('includes.footer')

</body>

