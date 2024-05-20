<!DOCTYPE html>
<html lang="es-ES" dir="ltr">

<head>
    <title>Galeria 1</title>
    <link href="../themes/5/js-image-slider.css" rel="stylesheet" type="text/css" />
    <script src="../themes/5/js-image-slider.js" type="text/javascript"></script>
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
    <style>
        body {background-color:#191919;color:#666;line-height:1.4;}
        .div1 a.current {color:#ccc;}
        .div1 a, .div2 a {color:#34739c;}
        .div2 p {padding:20px 0;}
    </style>
</head>




<body>

<nav class="topnav" id="myTopnav">

        <?php include '../menu.php'; ?>
      
    </nav>
    <article>
            <h1>GALERÍA, MODELO 1</h1>

            <img id="galeria" src="https://picsum.photos/id/22/400/400" alt="">



            <nav>
                <ul>
                    <li><a onclick="cargarfoto(49,0)"><img src="https://picsum.photos/id/49/400/400" alt=""></a></li>
                    <li><a onclick="cargarfoto(102,1)"><img src="https://picsum.photos/id/102/400/400" alt=""></a></li>
                    <li><a onclick="cargarfoto(34,2)"><img src="https://picsum.photos/id/34/400/400" alt=""></a></li>
                    <li><a onclick="cargarfoto(78,3)"><img src="https://picsum.photos/id/78/400/400" alt=""></a></li>
                </ul>
            </nav>


        </article>

        <footer>Fuente: <a href="http://www.menucool.com/javascript-image-slider" class="enlacepie">Dirección URL de la
                web donde esté el Script</a></footer>

</body>
</html>
