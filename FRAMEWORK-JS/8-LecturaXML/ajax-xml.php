<!DOCTYPE html>
<html lang="es-ES" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta name="language" content="es" />
    <title>| DAW | - JAVASCRIPT</title>
    <meta name="Title" content="| DAW | - JAVASCRIPT" />
    <meta name="description" content="Ejercicicios utilizando tecnologías WEB en el cliente" />
    <meta name="keywords" content="HTML, HTML5, CSS, CSS3, JAVASCRIPT, PHP, SQL, Bases de datos, Hease, WEB, Accesibilidad" />
    <meta name="distribution" content="global" />
    <meta name="author" content="Hugo Rivera" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!--    Animaciones CSS https://daneden.github.io/animate.css/-->

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/animate.css@3.5.2/animate.min.css">

    <!--El menu es de aqui: https://www.w3schools.com/howto/howto_js_responsive_navbar_dropdown.asp-->

    <!--Estilos-->
    <style>
        body {
            margin: 0;
            font-family: Arial;
            background-color: #000000;
        }

        .topnav {
            overflow: hidden;
            background-color: #333;
            opacity: 0.9;
        }

        .topnav a {
            float: left;
            display: block;
            color: #f2f2f2;
            text-align: center;
            padding: 10px 16px;
            text-decoration: none;
            font-size: 17px;
        }

        .active {
            background-color: #4CAF50;
            color: white;
        }

        .topnav .icon {
            display: none;
        }

        .dropdown {
            float: left;
            overflow: hidden;
        }

        .dropdown .dropbtn {
            font-size: 17px;
            border: none;
            outline: none;
            color: white;
            padding: 14px 16px;
            background-color: inherit;
            font-family: inherit;
            margin: 0;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f9f9f9;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
            z-index: 1;
        }

        .dropdown-content a {
            float: none;
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
            text-align: left;
        }

        .topnav a:hover,
        .dropdown:hover .dropbtn {
            background-color: #555;
            color: white;
        }

        .dropdown-content a:hover {
            background-color: #ddd;
            color: black;
        }

        .dropdown:hover .dropdown-content {
            display: block;
        }

        @media screen and (max-width: 600px) {

            .topnav a:not(:first-child),
            .dropdown .dropbtn {
                display: none;
            }

            .topnav a.icon {
                float: right;
                display: block;
            }
        }

        @media screen and (max-width: 600px) {
            .topnav.responsive {
                position: relative;
            }

            .topnav.responsive .icon {
                position: absolute;
                right: 0;
                top: 0;
            }

            .topnav.responsive a {
                float: none;
                display: block;
                text-align: left;
            }

            .topnav.responsive .dropdown {
                float: none;
            }

            .topnav.responsive .dropdown-content {
                position: relative;
            }

            .topnav.responsive .dropdown .dropbtn {
                display: block;
                width: 100%;
                text-align: left;
            }
        }

        /*CSS para la imagen de fondo y los textos centrados estilo etiquetas*/

        body,
        html {
            height: 100%;
            margin: 0;
            font: 400 15px/1.8 "Lato", sans-serif;
            color: #777;

        }

        .bgimg-1 {
            position: relative;
            background: url("../portada.jpg") no-repeat center;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
            height: 100%;
            opacity: 0.85;
        }

        .caption {
            position: absolute;
            left: 0;
            top: 10%;
            width: 100%;
            text-align: center;
            color: #000000;
            opacity: 0.85;
            z-index: -100;
        }

        .caption span.border {
            background-color: #111;
            color: #fff;
            padding: 18px;
            font-size: 25px;
            letter-spacing: 10px;

            /*Si comentamos la linea inferior las etiquetas de texto quedan juntas, valorar al gusto*/

            line-height: 100px;

        }
        
        #contenido{
            margin: 0 auto;
            width: 90%;
            background-color:snow;
            border: 1px solid black;
            
            
        }

        footer {

            position: fixed;
            bottom: 0;
            width: 100%;
            text-align: center;
            background-color: #000000;
            opacity: 0.85;
            padding: 10px;
            color: white;

        }

        /*        Enlaces para el pie*/
        a.enlacepie:link {
            text-decoration: none;
            color: lightpink;
        }

        a.enlacepie:visited {
            text-decoration: none;
            color: lightpink;
        }

        a.enlacepie:hover {
            text-decoration: underline;
            color: lightpink;
        }

        a.enlacepie:active {
            text-decoration: underline;
            color: lightpink;
        }
    </style>
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
