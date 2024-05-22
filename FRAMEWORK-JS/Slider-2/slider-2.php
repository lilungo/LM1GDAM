<!DOCTYPE html>
<html lang="es-ES" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta name="language" content="es" >
    <link rel="icon" type="image/png" href="favicon-32x32.png" sizes="32x32" />
    <link rel="icon" type="image/png" href="favicon-16x16.png" sizes="16x16" />
	<link rel="icon" type="image/ico" href="../../favicon.ico">
    <title>Slider 2</title>
    <meta name="Title" content="Slider 2" >
    <meta name="description" content="Ejercicicios utilizando tecnologías WEB en el cliente" >
    <meta name="keywords" content="HTML, HTML5, CSS, CSS3, JAVASCRIPT, PHP, SQL, Bases de datos, parallax, WEB, Accesibilidad" >
    <meta name="distribution" content="global" >
    <meta name="author" content="Hugo Rivera" >
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

   

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/animate.css@3.5.2/animate.min.css">

   
    <link rel="stylesheet" href="../js.css">
    <link href="../themes/4/js-image-slider.css" rel="stylesheet" type="text/css" />
    <script src="../themes/4/js-image-slider.js" type="text/javascript"></script>
    <link href="styles.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="generic.css">
</head>

<body>
<nav class="topnav" id="myTopnav">

<?php include '../menu.php'; ?>

</nav>
<main>
    
    <div class="div1"><h2>Slider 2</h2>
    </div>
    
    <div class = "contenido-div">
    
    <div id="sliderFrame">
        <div id="slider">
            <img src="../Slider-1/images/slider-1.jpg" />
            <img src="../Slider-1/images/slider-2.jpg" />
            <img src="../Slider-1/images/slider-3.jpg" />
            <img src="../Slider-1/images/slider-4.jpg" />
        </div>
        
        <div class="group1-Wrapper">
            <a onclick="imageSlider.previous()" class="group1-Prev"></a>
            <a onclick="imageSlider.next()" class="group1-Next"></a>
        </div>
        
        <div style="text-align:center;padding:20px;z-index:20;">
            <a onclick="imageSlider.previous()" class="group2-Prev"></a>
            <a id='auto' onclick="switchAutoAdvance()"></a>
            <a onclick="imageSlider.next()" class="group2-Next"></a>
        </div>
    </div>
</div>


    <script type="text/javascript">
        //The following script is for the group 2 navigation buttons.
        function switchAutoAdvance() {
            imageSlider.switchAuto();
            switchPlayPauseClass();
        }
        function switchPlayPauseClass() {
            var auto = document.getElementById('auto');
            var isAutoPlay = imageSlider.getAuto();
            auto.className = isAutoPlay ? "group2-Pause" : "group2-Play";
            auto.title = isAutoPlay ? "Pause" : "Play";
        }
        switchPlayPauseClass();
    </script>
    <footer>Fuente: <a href="http://www.menucool.com/javascript-image-slider" class="enlacepie">Dirección URL de la web donde esté el Script</a></footer>
    </main>
</body>
</html>
