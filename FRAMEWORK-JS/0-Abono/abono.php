<!DOCTYPE html>
<html lang="es-ES" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta name="language" content="es" >
    <link rel="icon" type="image/png" href="favicon-32x32.png" sizes="32x32" />
    <link rel="icon" type="image/png" href="favicon-16x16.png" sizes="16x16" />
	<link rel="icon" type="image/ico" href="../../favicon.ico">
    <title>| DAM | - JAVASCRIPT</title>
    <meta name="Title" content="| DAM | - JAVASCRIPT" >
    <meta name="description" content="Ejercicicios utilizando tecnologías WEB en el cliente" >
    <meta name="keywords" content="HTML, HTML5, CSS, CSS3, JAVASCRIPT, PHP, SQL, Bases de datos, parallax, WEB, Accesibilidad" >
    <meta name="distribution" content="global" >
    <meta name="author" content="Vuestro nombre" >
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/animate.css@3.5.2/animate.min.css">


    <link rel="stylesheet" href="../js.css">
    <link rel="stylesheet" href="tombola.css">
</head>

<body>
    <main class="bgimg-1 animated fadeIn">
    
    <nav class="topnav" id="myTopnav">

        <?php include '../menu.php'; ?>
      
    </nav>

    <h1>*El Script debe recoger el valor escrito en la caja y mostrar en un mensaje o escribir en la página el resultado del tipo de abono que corespondería segun. </h1>

    <p>Para Menores de 25 años les corresponde el ABONO JOVEN</p>
    <p>Para Mayores de 65 ABONO TERCERA EDAD</p>
    <p>En cualquier otro caso le corresponde el ABONO NORMAL.</p>
    <p>Controlar los valores negativos de la EDAD.</p>
    <p>Se debe mostrar un mensaje en la página con el abono correspondiente por debajo del botón</p>
    <p>Al cargarse la página la caja donde se escribe la edad debe tener el foco.</p>

    <h1>¿Qué tipo de abono le corresponde?</h1>

    <input type="text" name="cedad" id="cedad" value="" class="zoom">

    <input type="button" value="Confirma tu edad" name="b" id="b" class="zoomB">

    <div id="textoc" name="textoc">Te corresponde... </div>
    
    <a href="012-Abono-RESUELTO - If.html">Intentalo, es sencillo, pero si se te resiste te dejo mi solución &#8250;</a><br><br />

</body>

</html>