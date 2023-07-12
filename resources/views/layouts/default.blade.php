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
        @vite(['node_modules/bootstrap/dist/js/bootstrap.bundle.min.js'])
        {{-- @vite(['node_modules/dropzone/dist/dropzone-min'])
        <script src="https://codescandy.com/dashui/assets/libs/dropzone/dist/min/dropzone.min.js"></script> --}}
    </div>
</body>
</html>
