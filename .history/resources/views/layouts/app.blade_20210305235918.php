<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">
        <link href="css/styles.css" rel="stylesheet" />

        @livewireStyles

        <!-- Scripts -->
        <script src="{{ mix('js/app.js') }}" defer></script>
    </head>
    <body class="sb-nav-fixed">
        @livewire('template.navigation-menu')
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                @livewire('template.sidebar-menu')
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        @if (isset($header))
                            <h1 class="mt-4">{{ $header }}</h1>
                            <ol class="breadcrumb mb-4">
                                <li class="breadcrumb-item active">{{ $header }}</li>
                            </ol>
                        @endif
                        <div class="row">
                            {{ $slot }}
                        </div>
                    </div>
                </main>
                @livewire('template.footer')
            </div>
        </div>
        {{-- <x-jet-banner />

        <div class="min-h-screen bg-gray-100">

            <!-- Page Heading -->
            @if (isset($header))
                <header class="bg-white shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>

        @stack('modals') --}}

        @livewireScripts
        {{-- <script src="js/scripts.js"></script> --}}
    </body>
</html>