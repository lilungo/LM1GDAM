<!DOCTYPE html>
<html lang="es-ES" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta name="language" content="es" >
    <title>| DAW | - JAVASCRIPT</title>
    <meta name="Title" content="| DAW | - JAVASCRIPT" >
    <meta name="description" content="Ejercicicios utilizando tecnologías WEB en el cliente" >
    <meta name="keywords" content="HTML, HTML5, CSS, CSS3, JAVASCRIPT, PHP, SQL, Bases de datos, Hease, WEB, Accesibilidad" >
    <meta name="distribution" content="global" >
    <meta name="author" content="Hugo Rivera" >
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!--    Animaciones CSS https://daneden.github.io/animate.css/-->

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/animate.css@3.5.2/animate.min.css">

    <link rel="stylesheet" href="../js.css">

    <!--El menu es de aqui: https://www.w3schools.com/howto/howto_js_responsive_navbar_dropdown.asp-->

    
    
</head>

<body>
    <main class="bgimg-1 animated fadeIn">
        <nav class="topnav" id="myTopnav">

            <a href="../index.html">MENU</a>

            <div class="dropdown">

                <button class="dropbtn">Técnicos
                    <i class="fa fa-caret-down"></i>
                </button>
                <div class="dropdown-content">
                    <a href="../1-Tombola/tombola.html">¡Tombola!</a>
                    <a href="../2-Exploradores/exploradores.html">Exploradores</a>
                    <a href="../3-Mensajeria/mensajeria.html">Mensajería</a>
                    <a href="../4-Texto/texto.html">Mayus/Minus</a>
                    <a href="../5-Chocolate/chocolate.html">Chocolate</a>
                    <a href="../6-Procesador-de-Textos/procesador.html">Procesador de Textos</a>
                    <a href="../7-ALAX-LecturaTxT/ajax-txt.html">AJAX-Txt</a>
                    <a href="../8-LecturaXML/ajax-xml.html">Ajax & Xml</a>
                </div>
            </div>
            <div class="dropdown">
                <button class="dropbtn">Box
                    <i class="fa fa-caret-down"></i>
                </button>
                <div class="dropdown-content">
                    <a href="../LightBox/lightbox.html">LightBox</a>
                    <a href="../ShadowBox/shadowbox.html">ShadowBox</a>

                </div>
            </div>

            <div class="dropdown">
                <button class="dropbtn">Sliders
                    <i class="fa fa-caret-down"></i>
                </button>
                <div class="dropdown-content">
                    <a href="../Slider-1/slider-1.html">Modelo 1</a>
                    <a href="../Slider-2/slider-2.html">Modelo 2</a>

                </div>
            </div>

            <div class="dropdown">
                <button class="dropbtn">Galerías
                    <i class="fa fa-caret-down"></i>
                </button>
                <div class="dropdown-content">
                    <a href="../Galeria-1/Galeria-1.html">Modelo 1</a>
                    <a href="../Galeria-2/Galeria-2.html">Modelo 2</a>

                </div>
            </div>
            <div class="dropdown">
                <button class="dropbtn">Tiempo
                    <i class="fa fa-caret-down"></i>
                </button>
                <div class="dropdown-content">
                    <a href="../Reloj/reloj.html">Reloj</a>
                    <a href="../Datepicker/datepicker.html">DatePicker</a>
                    <a href="../CountDown/countdown.html">CountDown</a>
                </div>
            </div>
<!--
<div class="dropdown">
                <button class="dropbtn">Juegos
                    <i class="fa fa-caret-down"></i>
                </button>
                <div class="dropdown-content">
                    <a href="game-1.html">Game - I</a>
                    <a href="game-2.html">Game - II</a>
                    
                </div>
            </div>
-->

            <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
        </nav>

        <!--A partir de aqui el contenido-->

        <div>
            <div class="caption animated zoomInDown">
                <span class="border">Titulo del Script</span><br>
<!--                <span class="border">-->
                    
                    <div id="contenido">
                    
                    <h1>Contenido de cada script aqui</h1>
                    
                    </div>
                
<!--                </span>-->
            </div>

        </div>
        <footer>Fuente: <a href="#" class="enlacepie">Dirección URL de la web donde esté el Script</a></footer>
    </main>
    <script>
        function myFunction() {
            var x = document.getElementById("myTopnav");
            if (x.className === "topnav") {
                x.className += " responsive";
            } else {
                x.className = "topnav";
            }
        }
    </script>

</body></html>
