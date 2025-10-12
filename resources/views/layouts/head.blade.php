<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title') | Dash Ui - Bootstrap 5 Admin Dashboard Template</title>

    <!-- Favicon icon-->
    <link rel="shortcut icon" type="image/x-icon" href="{{ Vite::asset('resources/images/favicon/favicon.ico') }}" />

    <!-- Scripts -->
    @vite(['resources/scss/theme.scss'])
</head>
