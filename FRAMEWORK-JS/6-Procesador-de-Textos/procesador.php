<!DOCTYPE html>
<html lang="es-ES" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta name="language" content="es" >
    <link rel="icon" type="image/png" href="favicon-32x32.png" sizes="32x32" />
    <link rel="icon" type="image/png" href="favicon-16x16.png" sizes="16x16" />
	<link rel="icon" type="image/ico" href="../../favicon.ico">
    <title>Procesador</title>
    <meta name="Title" content="Procesador" >
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
    <div class ="contenidobox">


    <h2>
        <div id="titulo"><img src="https://www.formaciononline.com/wp-content/uploads/2018/06/853px-LibreOffice_Writer_icon_3.3.1_48_px.svg_-1.png">Maquetador de Texto.</div>
    </h2>
    <hr>
    <div id="barraControles">
    <div id="controles">Tamaño del texto
        <select id="tamanyo" onChange="formato();">
            <option value="8">8</option>
            <option value="10">10</option>
            <option value="12" selected>12</option>
            <option value="14">14</option>
            <option value="16">16</option>
            <option value="20">20</option>
        </select>

        Tipo de texto
        <select id="tipo" onChange="formato()">
            <option value="arial" selected>arial</option>
            <option value="verdana">verdana</option>
            <option value="geneva">geneva</option>
            <option value="georgia">georgia</option>
        </select>

        Color del texto
        <select id="color" onChange="formato()">
            <option value="#000000" selected>negro</option>
            <option value="#CCCCCC">gris</option>
            <option value="#6699FF">azul</option>
        </select>
        
        Interlineado
            <select id="interlineado" onChange="formato()">
            <option value="0.5">0.5</option>
            <option value="1" selected>1</option>
            <option value="1.5">1.5</option>
            <option value="2">2</option>
            
        </select>
        
    </div><br />
    <div id="controles2">
        Negrita&nbsp;
        <input name="negrita" type="checkbox" value="negrita" id="negrita" onClick="formato()">&nbsp;&nbsp;&nbsp;&nbsp;
        Cursiva&nbsp;
        <input type="checkbox" name="cursiva" value="checkbox" id="cursiva" onClick="formato()">&nbsp;&nbsp;&nbsp;&nbsp;Subrayado&nbsp;
        <input type="checkbox" name="subrayado" value="checkbox" id="subrayado" onClick="formato()">
        &nbsp;&nbsp;&nbsp;&nbsp;
        
        <label for="Alineación">Alineación</label>
        &nbsp;
        <span class="borde">
        <input name="a" type="radio" value="si" id="izquierda" onClick="formato()">&nbsp;Izq&nbsp;
        <input name="a" type="radio" value="si" id="derecha" onClick="formato()">&nbsp;Dch&nbsp;
        <input name="a" type="radio" value="si" id="centro" onClick="formato()">&nbsp;Cen&nbsp;
        <input name="a" type="radio" id="justificado" onClick="formato()" value="si">
        &nbsp;Justificada&nbsp;
            </span>
    </div>
        
        </div>
    <!-- Como veis en cada elemento de formulario llamamos a la función que ahora vamos a configurar, onchange="formato()" para los menús deplegables y onclick="formato()" para las casillas de verificación y radiobotones -->
    
    <!-- Ahora creamos la capa que contendrá el texto a formatear -->
    <hr>
    <div id="contTextarea">
    <textarea id="texto" placeholder="Escribe tu texto aqui..." autofocus></textarea>
        </div>
</div>
<footer>Fuente: <a href="https://javascript.solired.es/035%20-%20Formato%20Texto%20Controles%20de%20formulario%20-%20String.html" class="enlacepie">Dirección URL de la web donde esté el Script</a></footer>
</body></html>
