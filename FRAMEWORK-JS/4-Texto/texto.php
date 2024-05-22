<!DOCTYPE html>
<html lang="es-ES" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta name="language" content="es" >
    <link rel="icon" type="image/png" href="favicon-32x32.png" sizes="32x32" />
    <link rel="icon" type="image/png" href="favicon-16x16.png" sizes="16x16" />
	<link rel="icon" type="image/ico" href="../../favicon.ico">
    <title>Texto</title>
    <meta name="Title" content="Texto" >
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

<nav class="topnav" id="myTopnav">

        <?php include '../menu.php'; ?>
      
    </nav>
    
                <h1 class="border">Mayusculas o minusculas?</h1><br>
    <div  id = "div-one">
        <h1>¿Mayúsculas o minúsculas?</h1>
        <br><br>

        <input type="text" placeholder="Escribe aquí un texto" id="caja" autofocus="autofocus" onchange="verificar();">

        <br><br><br>

        <input type="button" class="btn btn-info btn-lg" value="Verificar formato del texto" onclick="verificar();">

        <br><br><br>
        <p id="texto"></p><br><br><br>
    </div>
</div>
    <footer>Fuente: <a href="https://javascript.solired.es/047%20-%20PROPUESTOS/04-B-MayusMinus.html" class="enlacepie">Dirección URL de la web donde esté el Script</a></footer>
</body></html>