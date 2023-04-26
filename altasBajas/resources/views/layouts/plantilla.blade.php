<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/datatable.css')}}">
    <link rel="stylesheet" href="{{asset('css/datatable5.css')}}">
    
    <link rel="stylesheet" href="{{asset('css/menu.css')}}">
    <title>@yield('tituloPagina')</title>

</head>
<body>
    @include('sweetalert::alert')
        
    <main class="site-wrapper">
            <div class="pt-table desktop-768">
              <div class="pt-tablecell page-home relative" style="background-image: url(https://images.unsplash.com/photo-1486870591958-9b9d0d1dda99?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1500&q=80);
                background-position: center;
                background-size: cover;">
                    <div class="overlay">
          
                        <div class="container">
                                @yield('fondo')
                                
                                @yield('contenido')                
                        </div>
                        
                    </div>
                    
                </div>
                
            </div>
            
        </main>
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{asset('js/jquery.js')}}"></script>
    <script src="{{asset('js/jqueryta.js')}}"></script>
    <script src="{{asset('js/datatable.js')}}"></script>
    <script src="{{asset('js/main.js')}}"></script>
    
</body>
</html>