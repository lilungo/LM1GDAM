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
    <link rel="stylesheet" href="exploradores.css">
    <script  src="exploradores.js" ></script>
</head>

<body>
    <main class="bgimg-1 animated fadeIn">
    
    <nav class="topnav" id="myTopnav">

        <?php include '../menu.php'; ?>
      
    </nav>

        <!--A partir de aqui el contenido-->

        <div>
            <div class="caption animated zoomInDown">
                <span class="border">Navegadores</span><br>
<!--                <span class="border">-->
                    
                    <div id="contenido">
                    
                    <h1>¿Que navegador sueles utilizar? (explorer, firefox, chrome, opera)</h1>
                    <p>Escribe en la caja inferior el nombre para ver el logotipo</p>
                    <h1>Navegador</h1>

                    <input type = "text" id = "navegadorusuario" class ="caja1" name ="navegadorusuario" value="" autofocus onChange="navegador();"
                    style="font-size: 20px">

                    <i class="fa fa-refresh fa-spin fa-3x fa-fw mano" onClick="borraCaja();"></i>

                    <input type="button" value="Mostrar logotipo" id="bres" name="bres" class="zoomB mano" onClick="navegador();"  style="font-size: 20px">
    <br>
    <div id="textoc"></div>

                    
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
