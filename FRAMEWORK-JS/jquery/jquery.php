<!DOCTYPE html>
<html lang="es-ES" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta name="language" content="es" >
    <link rel="icon" type="image/png" href="favicon-32x32.png" sizes="32x32" />
    <link rel="icon" type="image/png" href="favicon-16x16.png" sizes="16x16" />
	<link rel="icon" type="image/ico" href="../../favicon.ico">
    <title>JQuery</title>
    <meta name="Title" content="JQuery" >
    <meta name="description" content="Ejercicicios utilizando tecnologías WEB en el cliente" >
    <meta name="keywords" content="HTML, HTML5, CSS, CSS3, JAVASCRIPT, PHP, SQL, Bases de datos, parallax, WEB, Accesibilidad" >
    <meta name="distribution" content="global" >
    <meta name="author" content="Hugo Rivera" >
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

   

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <link href="fotorama.css" rel="stylesheet">
    <script src="fotorama.js"></script>
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.13.3/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
  <script src="https://code.jquery.com/ui/1.13.3/jquery-ui.js"></script>
  <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
  <script src="https://code.jquery.com/ui/1.13.3/jquery-ui.js"></script>


    <link rel="stylesheet" href="../js.css">
    <link rel="stylesheet" href="styles.css">
    <script  src="scripts.js" ></script>
</head>

<body>
<script>
        $( function() {
            $( "#tabs" ).tabs();
        } );
    </script>

<nav class="topnav" id="myTopnav">

<?php include '../menu.php'; ?>

</nav>
    <main  >
    <div>
            <div class="caption animated zoomInDown">
                <span class="border">Jquery</span><br>
<!--                <span class="border">-->
                    
                    <div id="contenido">
                    
                    <div id="centrar">
                    <div class="fotorama" data-width="700" data-ratio="700/467" data-max-width="100%"  data-autoplay="3000" data-nav="thumbs">
                            <img src="imgs/0.jpg">
                            <img src="imgs/1.jpg">
                            <img src="imgs/2.jpg">
                            <img src="imgs/3.jpg">
                            <img src="imgs/4.jpg">
                            <img src="imgs/5.jpg">
                            <img src="imgs/6.jpg">
                            <img src="imgs/7.jpg">
                            <img src="imgs/8.jpg">
                            <img src="imgs/9.jpg">
                            <img src="imgs/10.jpg">
                            
                    </div>
                </div>
                    <div id="tabs">
                        <ul>
                            <li><a href="#tabs-1">Descripción</a></li>
                            <li><a href="#tabs-2">Video</a></li>
                        </ul>
                        <div id="tabs-1">
                            <div id="texto">
                            <p>El Rayo Vallecano de Madrid, S.A.D., comúnmente conocido como Rayo Vallecano, es un club de fútbol español con sede en el barrio de Vallecas, en Madrid. Fundado el 29 de mayo de 1924, el club ha experimentado diversas etapas a lo largo de su historia, desde sus comienzos humildes hasta alcanzar notoriedad en la Primera División de España. A continuación, se presenta un recorrido por la historia del Rayo Vallecano:</p>

                            <p>El club fue fundado por un grupo de aficionados del barrio de Vallecas que deseaban tener un equipo propio. El nombre "Rayo" y el uniforme blanco con una franja diagonal roja fueron adoptados desde el inicio, inspirados en el River Plate de Argentina.</p>

                            <p> <b>Durante sus primeras décadas, el Rayo Vallecano jugó en las categorías regionales y de Tercera División. Fue en la temporada 1949-1950 cuando el equipo logró ascender a Segunda División por primera vez.</p>

                            <p> <b>El primer gran hito del Rayo Vallecano llegó en la temporada 1976-1977, cuando el equipo logró ascender a Primera División, la máxima categoría del fútbol español. Bajo la dirección del entrenador Héctor Núñez, el Rayo logró mantenerse en Primera durante varias temporadas, consolidándose como un equipo competitivo..</p>

                            <p> <b>La década del 2000 fue una época notable para el Rayo Vallecano. El club vivió una de sus etapas más exitosas bajo la dirección de Juande Ramos, alcanzando las semifinales de la Copa de la UEFA (actual Liga Europa) en la temporada 2000-2001. Este logro internacional destacó al Rayo en el panorama europeo, a pesar de que en el ámbito local el equipo sufrió altibajos.</p>

                            <p> <b>El club enfrentó serios problemas financieros en los años siguientes, que llevaron incluso a su descenso a Segunda División B en 2004. Sin embargo, el espíritu de lucha del Rayo Vallecano y el apoyo incondicional de su afición permitieron al equipo resurgir y regresar a Primera División en la temporada 2010-2011.</p>

                            </div>
                        </div>
                        <div id="tabs-2">
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/fDtVxsBHIa4?si=IHdrf-_-u2NYqKtC" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                        </div>
                        </div>
                    </div>
                
            </div>

        </div>
        <footer>Fuente: <a href="https://fotorama.io/#3df9ac37-4e86-49e5-9095-28679ab37718" class="enlacepie">Dirección URL de la web donde esté el Script</a></footer>
    </main>
    
</body></html>