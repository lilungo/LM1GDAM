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

<body onLoad="noBoton();">

<nav class="topnav" id="myTopnav">

        <?php include '../menu.php'; ?>
      
    </nav>
	<h1 class="border">Mensajeria</h1><br>
	<main>

                

		<img class ="img-one"  src="https://cdn-icons-png.flaticon.com/512/2250/2250401.png" width="350" height="280">

		<div id="mensajeError">
			<h3>Introduce las cartas y paquetes que quieras enviar</h3>
		</div>
		<h2>Presupuesto de mensajería</h2> 

		<table>
			<tbody>
				<tr>
					<td>Cartas</td>
					<td>
						<input name="cartas" id="cartas" class="zoom" value="0" type="number" min="0" max="1000"
							autofocus onchange="calcular();">
					</td>
				</tr>
				<tr>
					<td>Paquetes</td>
					<td>
						<input name="paquetes" id="paquetes" value="0" class="zoom" onchange="calcular();" type="number"
							min="0" max="1000">
					</td>
				</tr>
				<tr>
					<td><b>Total bultos</b></td>
					<td id="mensaje1">0</td>
				</tr>
				<tr>
					<td>Precio por bulto</td>
					<td>3€</td>
				</tr>
				<tr>
					<td>PVP sin IVA</td>
					<td id="mensaje2">0</td>
				</tr>
				<tr>
					<td>IVA 21%</td>
					<td id="mensaje3">0</td>
				</tr>
				<tr>
					<td height="45"><strong>Total con IVA</strong></td>
					<td class="resultado" id="mensaje4">0</td>
				</tr>


				<div id="funcionalidad">

					<a href="https://www.paypal.com/es/home" target="_blank">

						<img src="https://www.paypalobjects.com/webstatic/mktg/merchant_portal/button/buynow.es.png" alt="botón de pago a Paypal" name="boton" id="boton"
							width="205" height="52"
							title="Al pulsar te redireccionamos a la pasarela de pago en Paypal"></a> <i
						class="fa fa-refresh fa-2x fa-fw mano" onClick="recarga()" ;
						title="Recargar página y empezar de cero"></i>

				</div>

		</table>

	</main>
</body>

</html>