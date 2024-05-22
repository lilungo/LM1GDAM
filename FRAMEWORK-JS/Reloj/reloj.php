<!DOCTYPE html>
<html lang="es-ES" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta name="language" content="es" >
    <link rel="icon" type="image/png" href="favicon-32x32.png" sizes="32x32" />
    <link rel="icon" type="image/png" href="favicon-16x16.png" sizes="16x16" />
	<link rel="icon" type="image/ico" href="../../favicon.ico">
    <title>Reloj</title>
    <meta name="Title" content="Reloj" >
    <meta name="description" content="Ejercicicios utilizando tecnologías WEB en el cliente" >
    <meta name="keywords" content="HTML, HTML5, CSS, CSS3, JAVASCRIPT, PHP, SQL, Bases de datos, parallax, WEB, Accesibilidad" >
    <meta name="distribution" content="global" >
    <meta name="author" content="Hugo Rivera" >
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/animate.css@3.5.2/animate.min.css">
    <link rel="stylesheet" href="../js.css">
    <link rel="stylesheet" href="styles.css">
    <script  src="scripts.js" ></script>
    

</head>

<body>
    <main>
    
    <nav class="topnav" id="myTopnav">

        <?php include '../menu.php'; ?>

        <div>
            <div class="caption animated zoomInDown">
                <span class="border">Reloj</span><br>
                    
                    <div id="contenido">

                    <div class="contenedor">
  <div class="t">Hora:</div>
  <div class="timeis" id="tm"></div>
</div>
<div class="desperta">
  DESPERTADOR:<br/><br/> hora: <input type="text" id="hora"> minuto: <input type="text" id="minuto">
  <button>OK!</button>
</div>

        </div>
    </main>
    <footer>Fuente: <a href="https://codepen.io/colombe/pen/gMqOmj" class="enlacepie">Dirección URL de la web donde esté el Script</a></footer>

</body></html>