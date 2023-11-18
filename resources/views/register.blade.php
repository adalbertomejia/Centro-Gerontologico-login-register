<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/stylesr.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <title>Bienvenido a mi formulario</title>
<html>
<head>
    
    <!DOCTYPE html>
<html>
<head>
    <style>
        /* Estilos de la barra de navegación */
        .navbar {
            background-color: #dfee3b93;
            overflow: hidden;
        }

        .navbar a {
            float: left;
            display: block;
            color: rgb(0, 0, 0);
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }

        .navbar a:hover {
            background-color: #fa7070;
            color: black;
        }

        .button:hover {
            background-color: #818181;
        }
    </style>
</head>
<body>
    <!-- Barra de navegación -->
    <div class="navbar">
        <a href="{{ route('home') }}">Inicio</a>
        <a href="{{ route('register') }}">Registrarse</a>
        <a href="{{ route('login') }}">Iniciar sesión</a>
        <a href="{{ route('loginm') }}">Iniciar sesión medicos</a>
    </div>
</body>
</html>


<body>
    <div class="background-container"></div>
    <div class="content">
    <div class="container-form sign-up">
        <div class="welcome-back">
            <div class="message">
                <h1>Bienvenido al Centro Gerontológico</h1>
                <br>
                <h3>Si ya tienes una cuenta por favor inicia sesión aquí</h3>
                <button class="sign-up-btn">Iniciar sesión</button>
            </div>
        </div>
        <form class="formulario" method="POST" action="{{ route('usuario.store') }}">
            @csrf
                <h2 class="create-account">Registro del adulto mayor</h2>
    
                <p class="cuenta-gratis">Crear cuenta</p>
    
                <input type="text" name="name" placeholder="Nombre del adulto mayor" pattern="[A-Za-z\s]{2,50}">
                <input type="text" name="telefono" placeholder="Teléfono del adulto" pattern="[0-9]{1,10}">
                @if ($errors->has('telefono'))
                <ul class="alert alert-danger">
                    @foreach ($errors->get('telefono') as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
                @endif
                <input type="email" name="email" placeholder="Correo electrónico">
                @if ($errors->has('email'))
                <ul class="alert alert-danger">
                    @foreach ($errors->get('email') as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
                @endif
                <input type="date" name="date_born" placeholder="Fecha de nacimiento">
                <input type="text" name="domicilio" placeholder="Domicilio">
                <input type="text" name="ctutor" placeholder="Contacto del tutor" pattern="[A-Za-z\s]{2,50}">
                <input type="text" name="ttutor" placeholder="Teléfono del tutor" pattern="[0-9]{1,10}">
                @if ($errors->has('telefono'))
                <ul class="alert alert-danger">
                    @foreach ($errors->get('telefono') as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
                @endif

            <br>
            
            <style>
                .checkbox-group label {
                    display: inline-block;
                    margin-right: 10px;
                }
                body{
                    background-image: url(imgs/gero.jpg);
                    background-position: center;
                    background-attachment: fixed;
                    background-repeat: no-repeat;
                    background-size: cover;

                    //aqui funciona
                    top: 0;
                    left: 0;
                    width: 100%;
                    height: 100%;
                    
                    z-index: -1; /* Coloca el contenedor detrás del contenido */
                    background-size: cover;
                    filter: blur(0.5px); /* Ajusta el valor del desenfoque según tu preferencia */
                }
            </style>
            
            <div class="form-group">
                <label for="servicio">Talleres:</label>
                <br><br>
                <div class="checkbox-group">
                    <label for="Cocina">
                        Cocina
                        <input type="checkbox" id="Cocina" name="servicio1" value="1"> 
                    </label>
                    <label for="Papel_nono">
                        Papel nono
                        <input type="checkbox" id="Papel_nono" name="servicio2" value="1"> 
                    </label>
                    <label for="Danza">
                        Danza
                        <input type="checkbox" id="1" name="servicio" value="1"> 
                    </label>
                </div>
            </div>
                    <button type="submit" class="sign-in-btn">Registrarse</button>
            </form>
    </div>
</div>

</body>

</html>