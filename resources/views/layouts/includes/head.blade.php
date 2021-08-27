<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Sapio') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <link rel="stylesheet" href="{{ ('assets/bootstrap/dist/css/bootstrap.min.css') }}">

    @livewireStyles

    <link rel="stylesheet" href="{{ ('css/main.css') }}">

    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}" defer></script>
    <script src="{{ ('assets/bootstrap/js/dist/toast.js') }}"></script>
    <script src="{{ ('js/autohide.js') }}"></script>
    <script src="{{ ('assets/bootstrap/dist/js/bootstrap.bundle.js') }}"></script>

</head>
