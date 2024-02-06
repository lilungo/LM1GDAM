<!DOCTYPE html>
<html dir="ltr" lang="es">

<head>
    <meta charset="utf-8">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cambiar el título en cada página</title>
    
    <meta name="title" content="Como máximo 55 caracteres incluyendo
espacios en blanco, mismo contenido que para title">
    <meta name="description" content="Como máximo 110 caracteres
incluyendo espacios en blanco, éste es el resumen que mostrará google en los resultados de búsqueda">
   
    <meta name="keywords" content="palabras clave separadas por
coma">
    <meta name="author" content="Hugo Rivera">

    <link rel="stylesheet" type="text/css" href="../reset.css">

    <link rel="stylesheet" type="text/css" href="../mainS.css">

    <?php

    include '../libreriascss.php';?>
    <style>

<?php

include '../menucss.css';?>

<?php include '../menucss.php';?>





<style>
 
 body {margin:0;font-family:Arial}
 
 .topnav {
   overflow: hidden;
   background-color: #333;
 }
 
 .topnav a {
   float: left;
   display: block;
   color: #f2f2f2;
   text-align: center;
   padding: 14px 16px;
   text-decoration: none;
   font-size: 17px;
 }
 
 .active {
   background-color: #04AA6D;
   color: white;
 }
 
 .topnav .icon {
   display: none;
 }
 
 .dropdown {
   float: left;
   overflow: hidden;
 }
 
 .dropdown .dropbtn {
   font-size: 17px;    
   border: none;
   outline: none;
   color: white;
   padding: 14px 16px;
   background-color: inherit;
   font-family: inherit;
   margin: 0;
 }
 
 .dropdown-content {
   display: none;
   position: absolute;
   background-color: #f9f9f9;
   min-width: 160px;
   box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
   z-index: 1;
 }
 
 .dropdown-content a {
   float: none;
   color: black;
   padding: 12px 16px;
   text-decoration: none;
   display: block;
   text-align: left;
 }
 
 .topnav a:hover, .dropdown:hover .dropbtn {
   background-color: #555;
   color: white;
 }
 
 .dropdown-content a:hover {
   background-color: #ddd;
   color: black;
 }
 
 .dropdown:hover .dropdown-content {
   display: block;
 }
 
 @media screen and (max-width: 600px) {
   .topnav a:not(:first-child), .dropdown .dropbtn {
     display: none;
   }
   .topnav a.icon {
     float: right;
     display: block;
   }
 }
 
 @media screen and (max-width: 600px) {
   .topnav.responsive {position: relative;}
   .topnav.responsive .icon {
     position: absolute;
     right: 0;
     top: 0;
   }
   .topnav.responsive a {
     float: none;
     display: block;
     text-align: left;
   }
   .topnav.responsive .dropdown {float: none;}
   .topnav.responsive .dropdown-content {position: relative;}
   .topnav.responsive .dropdown .dropbtn {
     display: block;
     width: 100%;
     text-align: left;
   }
 }
#contenedor {
background-color: DodgerBlue;
display: flex;
/*flex-direction: row;*/
flex-flow: row wrap;
height: 300px;
justify-content: space-between;
}
#contenedor div {

background-color: #f1f1f1;
margin: 10px;
padding: 20px;
font-size: 30px;
}
main {
/* width:80%;
margin:100px auto;
background-color:yellow; */
}
</style> 

</head>

<body>
<span id="arriba"></span>
<nav>

    <div class="topnav" id="myTopnav">
        
<a href="../../Index.html" class="active">Inicio</a>

<a href="../../Index.html" class="dropdown">Parallax</a>

<a href="../../Index.html" class="dropdown">Bootstrap</a>
        
        <div class="dropdown">
            <button class="dropbtn">Rwd & Awd 
              <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-content">
              <a href="#">Camisetas</a>
              <a href="../../css/RWD/Detalle-Pelicula.php">Película</a>
              <a href="https://solired.es/openaula/Promociones/Promocion-2023-GDAM-1-1/" target="_blank">Orla</a>
              <a href="#">Apuestas</a>
              
            </div>
          </div> 
        
        <div class="dropdown">
            <button class="dropbtn">FlexBox 
              <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-content">
              <a href="../flexbox/coches/coches.php">Coches</a>
              <a href="../../css/flexbox/protonvpn.php">Proton VPN</a>
              <a href="../../css/flexbox/operadora-flex.php">Operadora</a>
              
            </div>
          </div> 

        <div class="dropdown">
          <button class="dropbtn">BoxModel 
            <i class="fa fa-caret-down"></i>
          </button>
          <div class="dropdown-content">
            <a href="../boxmodel/modeloX/modeloX.php">Modelo X</a>
            <a href="../boxmodel/modeloY/modeloY.php">Modelo Y</a>
            <a href="../../css/BoxModel/portada-A.php">Deportes</a>
            <a href="../boxmodel/operadora/operadora.php">Operadora (Lidertel)</a>
            <a href="#">Optativa 2</a>
          </div>
        </div> 
        </div> 
       
      
           
       


</nav>




    <main>

    <h1>Esta es la de las camisetas</h1>


    <div id="contenedor"> 
<div>1</div> 
<div>2</div>
<div>3</div>
<div>4</div>
<div>5</div>
<div>6</div>
</div>
    
   </main>


</body>

</html>