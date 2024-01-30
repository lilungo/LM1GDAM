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

    nav{ position: -webkit-sticky; 
      position: sticky;}
    
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

    main{
    width:80%;
    margin: 100px auto;
background-color:blue;}


#ejemplo{

    width:400px;
    height:400px;
    border: solid black 2px;
    margin:50px auto;
    background-color:green;
    overflow:auto;


}

#ejemplo2{

width:100%;
    /* height:400px; */
    border: solid black 2px;
    margin:50px auto;
    background-color:orange;
    /* overflow:auto; */

    text-align:center;

    padding: 30px;
    box-sizing:border-box;
}
.cajas{

    border: 1px solid gray;
    width: 20%;
    height: 100px;
    font-size:2rem;
    background-color: white;
    text-align:center;
    /* margin-left:10px;
    margin-right:10px; */

    margin: 0px 10px;

/* float:right; */

display:inline-block;



}

#caja2{
        position: relative;
        top:300px;
        left:200px;
        border: 1px solid gray;
        width: 20%;
        height: 100px;
        font-size:2rem;
        background-color: white;
        text-align:center;
        /* margin-left:10px;
        margin-right:10px; */

        margin: 0px 10px;

        /* float:right; */

        display:inline-block;



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
              <a href="../../css/flexbox/ACT-1-coches-peugeot.php">Coches</a>
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


    <div id="ejemplo">Lorem ipsum dolor sit amet consectetur adipiscing elit cursus libero placerat eu metus, sagittis volutpat lobortis parturient ante mauris et vestibulum id tellus faucibus ligula bibendum, phasellus sapien leo fusce ullamcorper luctus condimentum semper magnis auctor vehicula. Velit ullamcorper aptent netus commodo suscipit, facilisi felis phasellus nullam, suspendisse fermentum auctor leo. Vel massa vitae fermentum proin tempus gravida himenaeos lacus sed condimentum facilisi aenean velit suscipit magna urna curabitur, facilisis erat eleifend aliquet sodales maecenas cursus arcu porta quisque praesent sociosqu posuere laoreet felis.

Integer volutpat in hac venenatis facilisi habitant dapibus quis ultricies, aliquet lacinia ullamcorper fames sapien fermentum vulputate pharetra, convallis viverra montes nunc posuere egestas faucibus sociosqu. Ridiculus massa dis vehicula consequat imperdiet augue ac blandit, feugiat ornare orci nunc eget erat sed ullamcorper at, morbi sollicitudin aptent dignissim dui velit curae. Commodo magna posuere auctor etiam vulputate at eu sociis est sodales, suspendisse interdum velit lectus nec condimentum elementum aliquet accumsan dictumst, dis porttitor cursus tellus turpis facilisi non malesuada pretium. Penatibus arcu consequat curabitur praesent gravida mi ad tortor ullamcorper rutrum platea scelerisque, dignissim parturient vitae risus non accumsan quis feugiat mollis tempus.

Pharetra est laoreet malesuada neque aliquet cursus, nullam himenaeos vitae aliquam sollicitudin, quisque auctor non sodales orci. Fringilla morbi odio neque mattis massa ligula leo turpis ridiculus, mollis sollicitudin proin bibendum platea feugiat volutpat rutrum cursus lobortis, nam habitant pellentesque himenaeos per enim aliquet quam. Congue iaculis leo tempor vitae nisl viverra eleifend habitasse, velit sem purus ac convallis class commodo quam, auctor laoreet malesuada nascetur egestas dictum turpis.

Fames commodo justo suspendisse tincidunt ridiculus hendrerit dui hac non, rhoncus ultrices ut convallis iaculis cursus tristique elementum nibh nulla, ad luctus duis libero donec imperdiet et montes. Vestibulum diam parturient dictumst nec netus habitant viverra taciti himenaeos in posuere, odio nullam placerat dui nulla magna lacus habitasse mi ad. Augue lacus risus aptent parturient consequat sagittis taciti congue hendrerit, iaculis orci convallis faucibus tempus etiam nunc himenaeos sapien, ut purus laoreet mauris ridiculus eget eu dictum.  </div>

<div id="ejemplo2">



    <div class="cajas">

        <p>1</p>
    </div>

    <div id="caja2">

    <p>2</p>
    </div>

    <div class="cajas">

    <p>3</p>
    </div>

    <div class="cajas">

    <p>4</p>
    </div>
</div>
    
   </main>


</body>

</html>