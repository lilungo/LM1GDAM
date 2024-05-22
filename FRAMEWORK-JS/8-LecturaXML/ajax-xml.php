<!DOCTYPE html>
<html lang="es-ES" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta name="language" content="es" >
    <link rel="icon" type="image/png" href="favicon-32x32.png" sizes="32x32" />
    <link rel="icon" type="image/png" href="favicon-16x16.png" sizes="16x16" />
	<link rel="icon" type="image/ico" href="../../favicon.ico">
    <title>AJAX XML</title>
    <meta name="Title" content="AJAX XML" >
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
    
    <div>
            <div class="caption animated zoomInDown">
                <span class="border">Lectura de XML con Ajax</span><br>
<!--                <span class="border">-->
                    
                  
                    
                    <div id="contenedor">
  <div id="contenido">
  <div id="nota"><img src="https://i.pinimg.com/originals/ee/a0/0c/eea00c75d4d2d9685a6495049b0b94ce.jpg" width="100" height="100"></div>
    
    <h2>La Liga </h2>
     
    <button type="button"  onclick="cargaXML();">Ver equipos</button>
       <br/> 
      
      <table class="neutral"><tr class="neutral">
        <th class="nombre">Equipo</th> 
        <th class="ciudad">Ciudad</th>   
        <th class="entrenador">Entrenador</th> 
        <th class="camiseta">Camiseta</th>
      </tr>    
      
      </table>
    
   <div id="resultado2"></div> 
  </div>
    
</div>
                    
                   
                
<!--                </span>-->
            </div>

        </div>
        <footer>Fuente: <a href="https://javascript.solired.es/051-AJAX/3-micoleccion.html" class="enlacepie">Dirección URL de la web donde esté el Script</a></footer>    </main>
    

</body></html>  
  

