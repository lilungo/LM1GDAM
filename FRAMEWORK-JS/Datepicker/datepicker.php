<!DOCTYPE html>
<html lang="es-ES" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta name="language" content="es" >
    <link rel="icon" type="image/png" href="favicon-32x32.png" sizes="32x32" />
    <link rel="icon" type="image/png" href="favicon-16x16.png" sizes="16x16" />
	<link rel="icon" type="image/ico" href="../../favicon.ico">
    <title>Datepicker</title>
    <meta name="Title" content="Datepicker" >
    <meta name="description" content="Ejercicicios utilizando tecnologías WEB en el cliente" >
    <meta name="keywords" content="HTML, HTML5, CSS, CSS3, JAVASCRIPT, PHP, SQL, Bases de datos, parallax, WEB, Accesibilidad" >
    <meta name="distribution" content="global" >
    <meta name="author" content="Hugo Rivera" >
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
   

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/animate.css@3.5.2/animate.min.css">


    <link rel="stylesheet" href="../js.css">
    <link rel="stylesheet" href="styles.css">
    
</head>

<body>
    <main class="bgimg-1 animated fadeIn">
    
    <nav class="topnav" id="myTopnav">

        <?php include '../menu.php'; ?>
      
    </nav>
    <main>

        <!--A partir de aqui el contenido-->

        <div>
            <div class="caption animated zoomInDown">
                <span class="border">Datepicker</span><br>
                  <div class="todo">
                    <div id="contenido">
 
                        <form action="/action_page.php">
                            <label for="birthday">Fecha:</label>
                            <input type="date" id="birthday" name="birthday">
                          </form>
 
                    
                    </div>
                
<!--                </span>-->
            </div>
       
        </div>
        <footer>Fuente: <a href="https://www.w3schools.com/html/tryit.asp?filename=tryhtml_input_date" class="enlacepie">Dirección URL de la web donde esté el Script</a></footer>
    </main>

</body></html>
