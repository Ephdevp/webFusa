<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>

    <link rel="stylesheet" href="{{asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/vendor/bootstrap-icons/bootstrap-icons.css')}}">
    <link rel="stylesheet" href="{{asset('assets/vendor/sweetalert2/css/sweetalert2.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/system.css')}}">

    @yield('styles')

</head>

<body>
    <nav class="navbar bg-dark mb-5">
        <div class="container">
            <button class="btn text-light" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasScrolling" aria-controls="offcanvasScrolling"><i class="bi bi-list"></i> Menú</button>

            <div class="offcanvas offcanvas-start bg-dark" data-bs-scroll="true" data-bs-backdrop="false" tabindex="-1" id="offcanvasScrolling" aria-labelledby="offcanvasScrollingLabel">
                <div class="offcanvas-header text-light">
                    <h5 class="offcanvas-title" id="offcanvasScrollingLabel"><i class="bi bi-list"></i> Menú</h5>
                    <button type="button" class="btn text-light" data-bs-dismiss="offcanvas" aria-label="Close"><i class="bi bi-x-lg"></i></button>
                </div>
                <div class="offcanvas-body">
                    <ul>
                        <li class="gap-1">
                            <a class="text-light btn" href="{{route('back_office.getMessage')}}">
                                <i class="bi bi-envelope"></i> Mensajes
                            </a>
                        </li>
                        {{-- <li class="gap-1">
                            <a class="text-light btn" href="TafUSaw2hT_Kp05.php">
                                <i class="bi bi-person"></i> Clientes
                            </a>
                        </li> --}}
                        {{-- <li class="gap-1">
                            <a class="text-light btn" href="TafUSaw2hT_Kp06.php">
                                <i class="bi bi-cart4"></i> Ventas
                            </a>
                        </li> --}}
                        <li class="gap-1">
                            <a class="text-light btn" href="{{route('back_office.getCatalogue')}}">
                                <i class="bi bi-images"></i> Catálogo
                            </a>
                        </li>
                        {{-- <li class="gap-1">
                            <a class="text-light btn" href="TafUSaw2hT_Kp03.php">
                                <i class="bi bi-newspaper"></i> Publicaciones
                            </a>
                        </li> --}}
                        <li class="gap-1">
                            <a class="text-light btn" href="{{route('back_office.getUsers')}}">
                                <i class="bi bi-people"></i> Usuarios
                            </a>
                        </li>
                        <li><a class="text-light btn" href="{{route('logout')}}"><i class="bi bi-door-closed"></i> Salir</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>

    @yield('main')

    @include('backOffice._partials.footer')