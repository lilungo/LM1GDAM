<!DOCTYPE html>
<html lang="es-ES" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta name="language" content="es" >
    <link rel="icon" type="image/png" href="favicon-32x32.png" sizes="32x32" />
    <link rel="icon" type="image/png" href="favicon-16x16.png" sizes="16x16" />
	<link rel="icon" type="image/ico" href="../../favicon.ico">
    <title>Shadowbox</title>
    <meta name="Title" content="Shadowbox" >
    <meta name="description" content="Ejercicicios utilizando tecnologías WEB en el cliente" >
    <meta name="keywords" content="HTML, HTML5, CSS, CSS3, JAVASCRIPT, PHP, SQL, Bases de datos, parallax, WEB, Accesibilidad" >
    <meta name="distribution" content="global" >
    <meta name="author" content="Hugo Rivera" >
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

   

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/animate.css@3.5.2/animate.min.css">


    <link rel="stylesheet" href="../js.css">
    <link rel="stylesheet" href="../shadowboxsrc/dist/css/lightbox.min.css">
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <main class="bgimg-1 animated fadeIn">
    
    <nav class="topnav" id="myTopnav">

        <?php include '../menu.php'; ?>
      
    </nav>
        <!--A partir de aqui el contenido-->

        <div>
            <div class="caption animated zoomInDown">
                <span class="border">shadowbox</span><br>
<!--                <span class="border">-->
                    
                    <div id="contenido">
                    
                    <section>
    <h3>Dale click a una de las imágenes</h3><br>
    <div>
      <a class="example-image-link" href="https://www.ole.com.ar/2024/04/19/9Xc0YMivA_400x400__1.jpg"  data-lightbox="example-1"><img class="example-image" src="https://www.ole.com.ar/2024/04/19/9Xc0YMivA_400x400__1.jpg" alt="image-1" /></a>
      <a class="example-image-link"  href="https://estaticos-cdn.prensaiberica.es/clip/42322f6e-95ba-4bcc-8d33-a08ee5c775d5_source-aspect-ratio_default_0.jpg" data-lightbox="example-2" data-title="Optional caption."><img class="example-image" id = "img-2"src="https://estaticos-cdn.prensaiberica.es/clip/42322f6e-95ba-4bcc-8d33-a08ee5c775d5_source-aspect-ratio_default_0.jpg" alt="image-1"/></a>
    </div>

   <br><br>
  </section>

  <!-- <script src="../dist/js/lightbox-plus-jquery.min.js"></script> -->
  <script src="../shadowboxsrc/dist/js/lightbox-plus-jquery.min.js"></script>
                    
                    </div>
                
<!--                </span>-->
            </div>

        </div>
        <footer>Fuente: <a href="https://lokeshdhakar.com/projects/lightbox2/#getting-started" class="enlacepie">Dirección URL de la web donde esté el Script</a></footer>
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
