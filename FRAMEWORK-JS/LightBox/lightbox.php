<!DOCTYPE html>
<html lang="es-ES" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta name="language" content="es" >
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
    <link rel="stylesheet" href="styles.css">
    <script src="scripts.js"></script>
</head>

<body>
    <main class="bgimg-1 animated fadeIn">
    
    <nav class="topnav" id="myTopnav">

        <?php include '../menu.php'; ?>
      
    </nav>
<main>
    <div>
            <div class="caption animated">
                <span class="border">lightbox</span><br>
                    
                    <div id="contenido">

    <div class="row">
  <div class="col">
     <img src="https://cadenaser.com/resizer/NtCWqFvxYRVKCDjizesEZFDB9Gs=/1200x900/filters:format(jpg):quality(70)/cloudfront-eu-central-1.images.arcpublishing.com/prisaradio/64LTEZ6JCRILTC5LAWS2KU6MUM.jpg" onclick="openLightbox();toSlide(1)" class="hover-shadow preview" alt="Toy car on the road." />
  </div>
  <div class="col">
     <img src="https://images.ecestaticos.com/VmUALTkdv3uS-fcR_qRVyHXiXKQ=/0x0:2272x1549/1200x900/filters:fill(white):format(jpg)/f.elconfidencial.com%2Foriginal%2F9b5%2Fbd4%2Fbfa%2F9b5bd4bfaf5a91535e6bf6737eba2b3d.jpg" onclick="openLightbox();toSlide(2)" class="hover-shadow preview" alt="Toy car exploring offroad." />
  </div>
  <div class="col">
     <img src="https://images.ecestaticos.com/NuiCPp92Tx9u6mVyukh2y4bEYqg=/0x0:2272x1617/1200x900/filters:fill(white):format(jpg)/f.elconfidencial.com%2Foriginal%2Fdff%2Ff30%2F75a%2Fdfff3075a621ae31d1de14c9fbde6212.jpg" onclick="openLightbox();toSlide(3)" class="hover-shadow preview" alt="Toy car in the city." />
  </div>
</div>


     
<div id="Lightbox" class="modal">
  <span class="close pointer" onclick="closeLightbox()">&times;</span>
  <div class="modal-content">
    <div class="slide">
        <img src="https://cadenaser.com/resizer/NtCWqFvxYRVKCDjizesEZFDB9Gs=/1200x900/filters:format(jpg):quality(70)/cloudfront-eu-central-1.images.arcpublishing.com/prisaradio/64LTEZ6JCRILTC5LAWS2KU6MUM.jpg" class="image-slide" alt="Toy car on the road." />
    </div>
    <div class="slide">
        <img src="https://images.ecestaticos.com/VmUALTkdv3uS-fcR_qRVyHXiXKQ=/0x0:2272x1549/1200x900/filters:fill(white):format(jpg)/f.elconfidencial.com%2Foriginal%2F9b5%2Fbd4%2Fbfa%2F9b5bd4bfaf5a91535e6bf6737eba2b3d.jpg" class="image-slide" alt="Toy car exploring offroad." />
    </div>    
    <div class="slide">
        <img src="https://images.ecestaticos.com/NuiCPp92Tx9u6mVyukh2y4bEYqg=/0x0:2272x1617/1200x900/filters:fill(white):format(jpg)/f.elconfidencial.com%2Foriginal%2Fdff%2Ff30%2F75a%2Fdfff3075a621ae31d1de14c9fbde6212.jpg" class="image-slide" alt="Toy car in the city." />
    </div>
  
    <a class="previous" onclick="changeSlide(-1)">&#10094;</a>
    <a class="next" onclick="changeSlide(1)">&#10095;</a>
  
    <div class="dots">
      <div class="col">
        <img src="https://cadenaser.com/resizer/NtCWqFvxYRVKCDjizesEZFDB9Gs=/1200x900/filters:format(jpg):quality(70)/cloudfront-eu-central-1.images.arcpublishing.com/prisaradio/64LTEZ6JCRILTC5LAWS2KU6MUM.jpg" class="modal-preview hover-shadow" onclick="toSlide(1)" alt="Toy car on the road" />
      </div>
      <div class="col">
        <img src="https://images.ecestaticos.com/VmUALTkdv3uS-fcR_qRVyHXiXKQ=/0x0:2272x1549/1200x900/filters:fill(white):format(jpg)/f.elconfidencial.com%2Foriginal%2F9b5%2Fbd4%2Fbfa%2F9b5bd4bfaf5a91535e6bf6737eba2b3d.jpg" class="modal-preview hover-shadow" onclick="toSlide(2)" alt="Toy car exploring offroad." />
      </div>
      <div class="col">
        <img src="https://images.ecestaticos.com/NuiCPp92Tx9u6mVyukh2y4bEYqg=/0x0:2272x1617/1200x900/filters:fill(white):format(jpg)/f.elconfidencial.com%2Foriginal%2Fdff%2Ff30%2F75a%2Fdfff3075a621ae31d1de14c9fbde6212.jpg" class="modal-preview" hover-shadow onclick="toSlide(3)" alt="Toy car in the city." />
      </div>
    </div>
  </div>
</div>
       
    </main>
    <footer>Fuente: <a href="https://www.freecodecamp.org/news/how-to-create-a-lightbox-using-html-css-and-javascript/" class="enlacepie">Dirección URL de la web donde esté el Script</a></footer>

</body></html>
