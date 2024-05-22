<!DOCTYPE html>
<html lang="es-ES" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta name="language" content="es" >
    <link rel="icon" type="image/png" href="favicon-32x32.png" sizes="32x32" />
    <link rel="icon" type="image/png" href="favicon-16x16.png" sizes="16x16" />
	<link rel="icon" type="image/ico" href="../../favicon.ico">
    <title>Tómbola</title>
    <meta name="Title" content="Tómbola" >
    <meta name="description" content="Ejercicicios utilizando tecnologías WEB en el cliente" >
    <meta name="keywords" content="HTML, HTML5, CSS, CSS3, JAVASCRIPT, PHP, SQL, Bases de datos, parallax, WEB, Accesibilidad" >
    <meta name="distribution" content="global" >
    <meta name="author" content="Hugo Rivera" >
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

   

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/animate.css@3.5.2/animate.min.css">


    <link rel="stylesheet" href="../js.css">
    <link rel="stylesheet" href="tombola.css">
    <script  src="tombola.js" ></script>
</head>

<body>

    <main class="bgimg-1 animated fadeIn">
    
    <nav class="topnav" id="myTopnav">

        <?php include '../menu.php'; ?>
      
    </nav>

   
       
        <div class="div-principal">
            <div class="caption animated zoomInDown">
                <span class="border">¡Prueba suerte en la tómbola!</span><br>
<!--                <span class="border">-->
                    
                    <div id="contenido" class="div-one">
                    
                    <h1>Al presionar el botón saldrá un número aleatorio entre el 1 y el 100 !</h1>

                      <img src="https://static.wixstatic.com/media/11a4ef_209278b15ee646c28c6133c654721907.png/v1/fill/w_412,h_259,al_c,lg_1,q_85,enc_auto/11a4ef_209278b15ee646c28c6133c654721907.png">

                      <button  class="boton" name="b" id="b" onClick="premio();">¡Prueba suerte!</button>

                      <div id="numero" name="numero"></div>
    
    
    <div id="premio" name="premio"></div>
                    
                    </div>
                
<!--                </span>-->
            </div>

        </div>
        <footer>Fuente: <a href="https://javascript.solired.es/012-B%20-%20Loteria%20-RESUELTO%20-%20If.html" class="enlacepie">Dirección URL de la web donde esté el Script</a></footer>
    </main>
   

</body></html>
