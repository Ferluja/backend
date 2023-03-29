<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('librerias/bootstrap5/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('librerias/fontawesome6/css/all.css') }}">
    <link rel="stylesheet" href="{{ asset('librerias/DataTables/datatables.css') }}">
    <title>{{$titulo}}</title>
</head>
<body>
    @include('sweetalert::alert')
    @include('../shared/menu')
    @yield('contenido')
    <script src="{{ asset('librerias/DataTables/jQuery/jquery-3.6.0.js') }}"></script>
    <script src="{{ asset('librerias/DataTables/datatables.js') }}"></script>
    <script src="{{ asset('librerias/bootstrap5/bootstrap.bundle.min.js') }}"></script>
    @stack('scripts')
</body>
</html>