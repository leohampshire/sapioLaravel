<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@include('layouts.includes.head')

    <body class="font-sans antialiased">

    <x-jet-banner />

    <div class="min-h-screen bg-gray-100">

            @include('layouts.includes.nav-menu')

            <!-- Page Heading -->
            @if (isset($header))
                <header class="bg-white shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif


            <!-- Page Content -->
            <main class="">
                {{ $slot }}
            </main>
        </div>

        @stack('modals')

        @livewireScripts
    </body>

@include('layouts.includes.footer')
</html>
