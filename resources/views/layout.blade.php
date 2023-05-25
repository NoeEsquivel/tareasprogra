<html>
<head>
    <title>App Name - @yield('title')</title>
</head>
<body>
@section('sidebar')
    Pagina principal
    <br>
    <br>

        @show
        <div class="container">
            @yield('content')
        </div>
</body>
</html>
@section('js')
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <script>

        swal("¡Ventana emergente!");


    </script>
@endsection
