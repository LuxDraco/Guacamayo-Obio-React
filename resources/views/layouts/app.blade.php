<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Crimson+Pro:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Antonio:wght@100;200;300;400;500;600;700&display=swap"
          rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <!-- Add icon library -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<style>

</style>

<body>
<div id="app">

    <div class="modal fade" id="modalLogin" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title font-weight-bold" id="exampleModalLongTitle">Iniciar Sesión</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="d-flex justify-content-start align-items-center w-100">
                        <form id="formLogin" method="POST" action="{{ route('login') }}" class="w-100">
                            @csrf

                            <div class="form-group row">
                                <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail') }}</label>

                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Contraseña') }}</label>

                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="modal-footer">
                    <button
                        type="button"
                        class="btn"
                        style="background: #F58234; color: white;"
                        onclick="document.getElementById('formLogin').submit()"
                    >
                        Iniciar Sesión
                    </button>
                </div>
            </div>
        </div>
    </div>

    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
        @csrf
    </form>

    <div id="mySidenav" class="sidenav d-flex flex-column" style="z-index: 1000;">
        <div
            class="d-flex flex-column flex-grow-1"
        >
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
            <a href="/">Inicio</a>
            <a href="#">Catálogo</a>
            <a href="#">Mi Perfil</a>
        </div>
        <a
            href="#"
            onclick="event.preventDefault();document.getElementById('logout-form').submit();"
        >
            Cerrar Sesión
        </a>
    </div>

    <nav class="navbar navbar-expand-md navbar-light bg-transparent shadow-none"
         style="height: 150px; font-family: 'AntonioC', sans-serif; font-weight: 500; z-index: 100;">
        <div class="container-fluid h-100 toolbar-inicio">

            <a class="navbar-brand h-100" href="{{ url('/') }}">
                <img src="{{ asset('imgs/obio-logo.png') }}" alt="Logo" class="h-100"/>
            </a>

            <div class="d-flex flex-grow-1 justify-content-end h-50">
                <div class="rounded-pill d-flex justify-content-around align-items-center px-5 py-1 h-100"
                     style="background: #F58234;">
                    @guest
                        <button class="btn btn-link btn-link-custom" data-toggle="modal" data-target="#modalLogin">
                            Iniciar Sesión
                        </button>
                        <div class="h-100 bg-white mx-2" style="width: 2px"></div>
                        <button class="btn btn-link btn-link-custom">
                            Registrar
                        </button>
                    @else
                        <div
                            class="ml-1 mr-4 d-flex justify-content-center align-items-center"
                            style="width: 50px; height: 50px;"
                        >
                            <svg
                                fill="white" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                viewBox="0 0 512 512" xml:space="preserve" style="width: 35px; height: 35px;"
                            >
                                <g>
                                    <g>
                                        <path d="M508.764,74.466c-2.803-3.503-7.046-5.542-11.533-5.542H104.152L93.16,21.294c-1.547-6.701-7.514-11.448-14.391-11.448
                                                h-64C6.613,9.846,0,16.459,0,24.616s6.613,14.769,14.769,14.769H67.02l74.612,323.321c1.546,6.701,7.514,11.448,14.391,11.448
                                                h295.915c8.157,0,14.769-6.613,14.769-14.769c0-8.157-6.613-14.769-14.769-14.769H167.773l-11.36-49.231h296.511
                                                c6.908,0,12.893-4.788,14.409-11.527L511.64,86.935C512.625,82.557,511.567,77.97,508.764,74.466z M441.108,265.846H149.596
                                                L110.969,98.462h367.8L441.108,265.846z"
                                        />
                                    </g>
                                </g>

                                <g>
                                    <g>
                                        <path d="M216.615,393.846c-29.86,0-54.154,24.293-54.154,54.154s24.293,54.154,54.154,54.154c29.86,0,54.154-24.293,54.154-54.154
                                                S246.476,393.846,216.615,393.846z M216.615,472.616C203.042,472.616,192,461.573,192,448s11.042-24.615,24.615-24.615
                                                c13.573,0,24.615,11.042,24.615,24.615S230.188,472.616,216.615,472.616z"/>
                                    </g>
                                </g>

                                <g>
                                    <g>
                                        <path d="M393.846,393.846c-29.86,0-54.154,24.293-54.154,54.154s24.293,54.154,54.154,54.154c29.86,0,54.154-24.293,54.154-54.154
                                                S423.707,393.846,393.846,393.846z M393.846,472.616c-13.573,0-24.615-11.042-24.615-24.615s11.042-24.615,24.615-24.615
                                                c13.573,0,24.615,11.042,24.615,24.615S407.419,472.616,393.846,472.616z"/>
                                    </g>
                                </g>
                            </svg>

                        </div>
                        <div class="d-flex flex-column text-white justify-content-between"
                             style="font-size: 1.8rem; cursor: pointer;">
                            <span class="d-flex justify-content-end" style="font-weight: 500;">
                                {{ Auth::user()['name'] }}
                            </span>
                        </div>

                        <div class="h-100 bg-transparent mx-2" style="width: 2px"></div>

                        <img
                            src="{{ Auth::user()['img_profile'] }}"
                            alt="Avatar"
                            class="rounded-circle"
                            style="height: 60px; width: 60px; object-fit: cover; border: 3px solid #8F9481;"
                        />

                        <div class="h-100 bg-white mr-2 ml-3" style="width: 2px"></div>

                        <button class="btn text-white rounded-circle" style="height: 50px; width: 50px;"
                                onclick="openNav()">
                            <i class="fa fa-bars" style="font-size: 25px;"></i>
                        </button>
                    @endguest
                </div>
            </div>

        </div>
    </nav>

    <main class="vh-100 vw-100 position-absolute d-flex justify-content-center p-0 m-0"
          style="top: 0; left: 0; right: 0; bottom: 0; z-index: 0; max-width: 100%;"
    >
        @yield('content')
    </main>
</div>

<script>
    let openBool = false;

    function openNav() {
        openBool = !openBool;
        if (openBool) {
            if (screen.width < 1200) {
                document.getElementById("mySidenav").style.width = "100%";
            } else{
                document.getElementById("mySidenav").style.width = "40%";
            }
        } else {
            document.getElementById("mySidenav").style.width = "0";
        }
    }

    function closeNav() {
        openBool = !openBool;
        if (openBool) {
            if (screen.width < 1200) {
                document.getElementById("mySidenav").style.width = "100%";
            } else{
                document.getElementById("mySidenav").style.width = "40%";
            }
        } else {
            document.getElementById("mySidenav").style.width = "0";
        }
    }
</script>

</body>
</html>
