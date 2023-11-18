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
    <title>Bienvenido a mi Formulario</title>
</head>

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

        body{
                    background-image: url(imgs/gero.jpg);
                    background-position: center;
                    background-attachment: fixed;
                    background-repeat: no-repeat;
                    background-size: cover;}
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
    <div class="container-form sign-in">
        <div class="welcome-back">
            <div class="message">
                <h1>Bienvenido al Centro Gerontológico</h1>
                <br>
                <h3 >Inicio de sesión para personal</h3>
            </div>
        </div>
        <form class="formulario" method="POST" action="{{ route('medico.login') }}">
             @csrf
            <h2 class="create-account">Iniciar Sesion</h2>
            <p class="cuenta-gratis">Ingresa aqui con tu numero de telefono</p>
            <input type="text" placeholder="Usuario">
            <input type="password" placeholder="Contraseña">
            <button type="submit" class="sign-in-btn">Iniciar sesión</button>
        </form>
        
    </div>
    </div>
</body>

</html>