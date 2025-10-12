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
        @vite(['resources/js/app.js'])
    </div>
</body>
</html>
