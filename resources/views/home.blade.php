<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Centro gerontológico</title>
    <link rel="stylesheet" href="\css\styleh.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" 
    integrity="sha512-PgQMlq+nqFLV4ylk1gwUOgm6CtIIXkKwaIHp/PAIWHzig/lKZSEGKEysh0TCVbHJXCLN7WetD8TFecIky75ZfQ==" 
    crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<body>
    <section class="main">
        <style>
            .main{
    height: 80vh;
    width: 100%;
    background-image: linear-gradient(rgb(4 3 3/60%),
    rgb(0 0 0/33%)),url(imgs/gero0.jpg);
    background-position: center;
    background-size: cover;
    background-repeat: no-repeat;
}
        </style>
        <div class="navbar h-class">
            <ul class="items v-class">
                <li><a href="{{ route('home') }}">Inició</a></li>
                <li><a href="{{ route('register') }}">Registrar</a></li>
                <li><a href="{{ route('login') }}">Iniciar sesión</a></li>
                <li><a href="{{ route('loginm') }}">Iniciar sesión medicos</a></li>
            </ul>

        </div>
        <div class="burger">&#9776</div>
        <div class="main-heading">
            <h1 class="heading">Centro Gerontológico</h1>
            
            <button onclick="scrollToSection('talleres')" class="btn btn1">Detalles</button>
            <script>
                function scrollToSection(sectionId) {
                const section = document.querySelector(`#${sectionId}`);
                if (section) {
                    section.scrollIntoView({ behavior: 'smooth' });
                }
            }
</script>
        </div>
    </section>
    <!-- ________-story________ -->
    <section class="sec">
        <h1 class="heading">Nuestra historia</h1>
        <div class="row">
            <div class="boxes">
                <h1>Centro Gerontológico</h1>
                <p class="mid-para">Nuestra misión es proporcionar a las personas adultas mayores atención gerontológica integral, y mejorar las condiciones de vida, fomentando la integración, participación y desarrollo social en la vejez.
                </p>
            </div>
            <div class="img"><img src="imgs/gero0.jpg" alt=""></div>
        </div>
    </section>
    <!-- _______types_________ -->
    <section class="sec">
        <h1 id="talleres" class="heading">Talleres</h1>
        
        <div class="row">
            <div class="box">
                <img src="imgs/geroapapelnono.jpg" style="width: 200px; height: 150px;" alt="">
                <h2>Papel Nono</h2>
            </div>
            <div class="box">
                <img src="imgs/gerococina1.jpg" style="width: 200px; height: 150px;"alt="">
                <h2>Cocina</h2>
            </div>
            <div class="box">
                <img src="imgs/gerodanza.jpg" style="width: 200px; height: 150px;"alt="">
                <h2>Danza</h2>
            </div>
        </div>
    </section>

        <!-- ________comments________ -->
        <section class="comments sec">
            <div class="row">
                 <div class="box c-box">
                    <p>Quieres saber mas de nuestro taller de papel nono? Dale aqui en ver mas...</p>
                    <a href="pagina-adicional.html" class="ver-mas-button">Ver Más...</a>
                 </div>
                 <div class="box c-box">
                    <p>Quieres saber mas de nuestro taller de cocina? Dale aqui en ver mas...</p>
                    <a href="pagina-adicional.html" class="ver-mas-button">Ver Más...</a>
                 </div>
                 <div class="box c-box">
                    <p>Quieres saber mas de nuestro taller de danza? Dale aqui en ver mas...</p>
                    <a href="pagina-adicional.html" class="ver-mas-button">Ver Más...</a>
                 </div>
            </div>
        </section>

    <!-- ________about_________ -->
    <section class="sec a-sec">
        <div class="about">
            <div class="about-box">
                <h1 class="heading">De que se trata</h1>
                <p class="mid-para">Hemos creado una página web para nuestro centro gerontológico con el objetivo de proporcionar un acceso fácil a información crucial sobre nuestros talleres que ofrecemos. Queremos que las personas mayores, sus familias y cuidadores encuentren información detallada sobre nuestros programas de atención. Nuestro enfoque es facilitar el acceso a servicios de calidad y apoyar el bienestar de las personas mayores en nuestra comunidad.
                </p>
            </div>
        </div>
    </section>

    <script src="index.js"></script>
</body>
</html>