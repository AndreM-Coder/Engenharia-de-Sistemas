<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'V3ndas') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <!-- icons -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link rel="stylesheet" href="{{url('css/outside.css')}}">
</head>

<body>

    <header>
        <nav class="navbar navbar-static-top navbar-expand-lg navbar-dark bg-primary fixed-top">

            <div class="container">
                <a class="navbar-brand logo-font" href="/" id="brand">
                    <img width="150px" src="{{url('images/logo_cinza.png')}}" alt="{{ config('app.name', 'V3ndas') }}"
                        title="{{ config('app.name', 'V3ndas') }}">
                </a>
                <!-- links toggle -->
                <button class="navbar-toggler order-first" type="button" data-toggle="collapse" data-target="#links"
                    aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                <!-- account toggle -->
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#account"
                    aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-shopping-cart fa-1x" aria-hidden="true"></i>
                    <span class="badge badge-light">88</span>
                </button>

                <div class="collapse navbar-collapse" id="links">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Lojas
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="{{url('user/loja')}}">Todas as lojas</a>

                            </div>
                        </li>                      
                        <li class="nav-item">
                        <a class="nav-link" href="{{url('terms')}}">Termos do Serviço</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Contacto</a>
                        </li>

                    </ul>
                </div>
                <div class="collapse navbar-collapse" id="account">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item"><a class="nav-link" href="#">Carrinho Compras
                                <i class="fa fa-shopping-cart fa-1x" aria-hidden="true"></i>
                            </a></li>
                        <li class="nav-item"><a class="nav-link" href="login">Entrar</a></li>
                        <li class="nav-item"><a class="nav-link" href="register">Registar</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <main role="main" class="my-5">

        @yield('content')
    </main>
    <footer class="footer">
        <nav class="navbar navbar-default navbar-custom">
            <div class="container-fluid">
                <div class="nav navbar-nav navbar-left">
                    <ul class="footerleft">
                        <li>
                            <a href="">Politica Privacidade</a>
                        </li>
                        <li>
                            <a href="">Termos Serviço</a>
                        </li>
                        <li>
                            <a href="">Contacto</a>
                        </li>
                    </ul>
                </div>

                <div class="text-center center-block">
                    <a href=""><i id="social-fb" class="fab fa-facebook-square fa-3x social"></i></a>
                    <a href=""><i id="social-tw" class="fab fa-twitter-square fa-3x social"></i></a>
                    <a href=""><i id="social-gp" class="fab fa-google-plus-square fa-3x social"></i></a>
                    <a href=""><i id="social-em" class="fas fa-envelope-square fa-3x social"></i></a>
                </div>     
            </div>
        </nav>
    </footer>

</body>

</html>