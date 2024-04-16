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

    <div id="main">
<form id="form1" name="form1" method="post" action="">
  <h3>¿Cuantas Kilocalorías hay en?</h3>
  <p>
    <label for="tipo">Tipo de Chocolate</label>
    <select name="tipo" id="tipo">
      <option value="Negro_Amargo">Negro Amargo</option>
      <option value="Chocolate de Taza">Chocolate de Taza</option>
      <option value="Chocolate_con_leche">Chocolate con leche</option>
      <option value="Chocolate Blanco">Chocolate Blanco</option>
      <option value="Chocolate Light">Chocolate Light</option>
    </select>
  </p>
  <p>Cantidad (en gramos) 
    <label for="gramos"></label>
    <input name="gramos" type="text" id="gramos" value="100" size="8">
  </p>
  <p>Total calorias (en Kcal) 
    <label for="Kcal"></label>
    <input name="Kcal" type="text" id="Kcal" onfocus= "calcula();"  onclick="calcula();" onBlur="limpito();" size="6" readonly>
   
    
  Kcal</p>
</form></div>
</body>
</html>