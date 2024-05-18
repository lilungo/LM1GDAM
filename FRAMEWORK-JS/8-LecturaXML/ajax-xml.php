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
</head>

<body>

<nav class="topnav" id="myTopnav">

        <?php include '../menu.php'; ?>
      
    </nav>
    
<main>
                    
    <div>
            <div class="caption animated zoomInDown">
                <span class="border">Lectura de XML con ajax</span><br>
                    
                    <div id="contenido">
                    
                    <div id="contenedor">
                    <div id="contenido2">
                    <div id="nota"><img src="https://seeklogo.com/images/L/LFP-logo-8C187F8F3E-seeklogo.com.png" width="150" height="150"></div>
                        
                        <h2>Equipos de La Liga</h2>
                        
                        <button type="button"  onclick="cargaXML()">Cargar equipos</button>
                        <br /><br /><br />
                        
                        <table class="neutral">
                        <tr class="neutral">
                            <th>Equipo</th>  
                            <th> Ciudad</th> 
                            <th>Entrenador</th> 
                            <th>Camiseta</th> 
                        </tr>    
                        
                        </table>
                        
                    <div id="resultado2"></div> 
                    </div>
                        
                    </div>
                    
                    </div>
                
            </div>

        </div>
        <footer>Fuente: <a href="https://javascript.solired.es/051-AJAX/3-micoleccion.html" class="enlacepie">Dirección URL de la web donde esté el Script</a></footer>
    </main>
    

</body></html>
