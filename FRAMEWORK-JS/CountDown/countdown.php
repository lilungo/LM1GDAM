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
    <meta name="author" content="Hugo Rivera" >
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

   

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/animate.css@3.5.2/animate.min.css">


    <link rel="stylesheet" href="../js.css">
    <link rel="stylesheet" href="styles.css">
    <script  src="scripts.js" ></script>
    <script src="countdown.js"></script>
</head>

<body>

<nav class="topnav" id="myTopnav">

        <?php include '../menu.php'; ?>
      
    </nav>
    <main>

    <div>
            <div class="caption animated zoomInDown">
                <span class="border">Cuenta atrás</span><br>

                    
                    <div id="contenido">
                    
                    <script src="countdown.js" type="text/javascript"></script>
                    <script type="application/javascript">

                    var myCountdownTest = new Countdown({
                                                        // I'm cheating here... so I don't have to update this every year!
                                                        // year : 2042, // <-- This is a better example of what to use.
                                                        year: (new Date().getFullYear() + 1),
                                                        month	: 0, 
                                                        day		: 0,
                                                        width	: 450, 
                                                        height	: 80
                                                        });



                    </script>
                    
                    </div>
                
            </div>

        </div>
        <footer>Fuente: <a href="https://www.gieson.com/Library/projects/utilities/countdown/" class="enlacepie">Dirección URL de la web donde esté el Script</a></footer>
    </main>
    
</body></html>
