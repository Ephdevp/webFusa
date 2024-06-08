<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <title> FUSA | Administrador </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Videojuegos & Desarrollo">

    <!-- Link hacia el archivo de estilos css -->
    <link rel="stylesheet" href="{{asset('assets/css/login.css')}}">
    <link rel="stylesheet" href="{{asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/vendor//bootstrap-icons/bootstrap-icons.css')}}">
</head>

<body>

    <div id="contenedor">
        <div id="central">
            <div id="login" class="bg-dark">
                <div class="titulo">
                    Escriba una nueva contraseña
                </div>
                <form method="post" id="loginform" action="{{route("back_office.userResetPassword")}}">
                    @csrf
                    @error('password')
                        <div class="text-warning mb-1"><i class="bi bi-exclamation-triangle"></i> {{$message}}</i></div>
                    @enderror
                    <input class="mb-4" type="password" name="password" value="{{old("name")}}" placeholder="nueva Contraseña">

                    @error('confirm')
                        <div class="text-warning mb-1"><i class="bi bi-exclamation-triangle"></i> {{$message}}</i></div>  
                    @enderror
                    <input type="password" placeholder="Confirmar contraseña" value="{{old("password")}}" name="confirm">

                    <button class="mt-5 btn btn-light" type="submit" title="Ingresar" name="Ingresar"><b>Establecer</b></button>
                </form>
                <div class="pie-form">
                    <p style="color:white;">ingrese y confirme su nueva contraseña</p>
                </div>
            </div>
            <div class="inferior">
                <a class="text-dark" href="{{route('logout')}}">Volver</a>
            </div>
        </div>
    </div>
</body>

</html>