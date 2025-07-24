<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ElTech - @yield('titulo') </title>
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('media/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('media/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('media/favicon-16x16.png') }}">
    <link rel="manifest" href="{{ asset('media/site.webmanifest') }}">
    <link rel="stylesheet" href="{{ asset('css/adm.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    @include('cliente.layouts.navbar')
    @yield('bloco_conteudo')
    {{-- @include('cliente.layouts.footer') --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>