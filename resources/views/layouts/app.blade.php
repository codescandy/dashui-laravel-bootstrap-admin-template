{{-- <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/scss/theme.scss', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100 dark:bg-gray-900">
            @include('layouts.navigation')
            <!-- Page Heading -->
            @isset($header)
                <header class="bg-white dark:bg-gray-800 shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endisset

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>
    </body>
</html> --}}



@include('layouts.head')
<body >
    <div id="app">
        <div id="db-wrapper">
            <!-- navbar vertical -->            
            @include('layouts.navbar-vertical', ['page' => (isset($page)? $page : ''), 'page_group' => (isset($page_group)? $page_group : '')])
            <!-- Page content -->
            <div id="page-content">
                @include('layouts.header')
                @yield('content')
            </div>
        </div>
        <!-- Scripts -->
        @vite(['resources/js/app.js'])

        <!-- plugin js -->
    @stack('plugin-scripts')
    <!-- end plugin js -->
    @vite('resources/js/app.js')
        {{-- @vite(['node_modules/bootstrap/dist/js/bootstrap.bundle.min.js']) --}}
        {{-- @vite(['node_modules/dropzone/dist/dropzone-min'])
        <script src="https://codescandy.com/dashui/assets/libs/dropzone/dist/min/dropzone.min.js"></script> --}}
    </div>
</body>
</html>
