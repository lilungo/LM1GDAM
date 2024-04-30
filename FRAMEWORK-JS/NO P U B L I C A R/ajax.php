<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Cargando desde un XML</title>

<link href='https://fonts.googleapis.com/css?family=Quattrocento+Sans:400,700' rel='stylesheet' type='text/css'>

<style type="text/css">
#contenedor {
/*	width:992px;*/
    margin-top: 20px;
	margin-right: auto;
	margin-bottom: 10px;
	margin-left: auto;
	font-family: 'Quattrocento Sans', sans-serif;
}
#contenedor #contenido {
	width: 630px;
/*	border: thin dotted #666;*/
	position: relative;
	text-align: center;
	margin-top: auto;
	margin-right: auto;
	margin-bottom: auto;
	margin-left: auto;
}
#resultado2 {
	position: absolute;
	left: -48px;
	top: 140px;
	width: 680px;
	height: 600px;
	z-index: 0;
	border: 1px solid #F63;
	padding: 10px;
	overflow: auto;
	text-align: left;
	font-size: 1.1em;
}
#contenedor #contenido button {
	color: #F63;
}
    table{
        
        width:100%;
        
    }
    
        
        
   
tr:nth-child(odd){
    background: #c07e62;
    color: #FFFFFF;
}
 
tr:nth-child(even){
    background:#d6d6d6;
    color: #000000;
}
    
    tr.neutral{
        background:#373333;
    color:#faf9f9;
     }
#nota {
	position: absolute;
	left: 36px;
	top: -13px;
	width: auto;
	height: 154px;
	z-index: 1;
}
</style>


</head>
<script>

function cargaXML()
{
	var conexion;
	var txt,x,i;
	
    if (window.XMLHttpRequest)
  {
  	conexion=new XMLHttpRequest();
  }
else
  {
  	conexion=new ActiveXObject("Microsoft.XMLHTTP");
  }
    
    //Hasta aqui hemos comprobado el objeto segun el navegador y creado una instalncia en la variable conexion
    
    
		conexion.onreadystatechange=function()
  {
 	 if (conexion.readyState==4 && conexion.status==200)
	 //Recibido y preparado el server==4, todo ok ==200
    {
   	 var xmlDoc=conexion.responseXML;
	 
	 //empleamos un responseXML en lugar de un responseText y lo almacenamos en la variable
   	 
	var txt="<table>";
    //Creamos una variable txt que la definimos como "<table>";
	
	//A partir de aqui definimos las variables que necesitemos para almacenar el contenido de cada una de las etiquetas XML
	//y que recogemos con TagName solo de las etiquetas que tienen valor a mostrar
	
        //Además, para que le bucle sea más sencillo de tratar en lugar de definir la variable titulo, la hemos reacondicionado por x
	
        x=xmlDoc.getElementsByTagName("titulo");
        artista=xmlDoc.getElementsByTagName("artista");
        pais=xmlDoc.getElementsByTagName("pais");
        firma=xmlDoc.getElementsByTagName("firma");
        precio=xmlDoc.getElementsByTagName("precio");
        anio=xmlDoc.getElementsByTagName("anio");
    
	//Creamos el bucle en el que incluimos la tabla (variable txt) y pintamos línea a línea el primer nodo de cada índice del array que representan los elementos en el XML
        
	
    for (i=0;i<x.length;i++)
      {
      txt=txt + "<tr><td>" + x[i].childNodes[0].nodeValue +"</td><td>"+ artista[i].childNodes[0].nodeValue +"</td><td>"+ pais[i].childNodes[0].nodeValue+ "</td><td>"+ firma[i].childNodes[0].nodeValue+ "</td><td>"+ precio[i].childNodes[0].nodeValue+ "</td><td>"+ anio[i].childNodes[0].nodeValue+ "</td></tr>";
       }
    document.getElementById("resultado2").innerHTML=txt;
    }
  }
  
  txt=txt+'</table>'
  
  //Añadimos la apertura de la conexión y la enviamos
  
  conexion.open("GET","coleccioncd.xml",true);
  conexion.send();
  
  
}

</script>
<body>
	
   


<div id="contenedor">
  <div id="contenido">
  <div id="nota"><img src="nota-musical.png" width="70" height="150"></div>
    
    <h2>Mi coleccion de Música (AJAX+XML)</h2>
     
    <button type="button"  onclick="cargaXML()">Cargar Listado MP3</button>
       <br /><br /><br />
      
      <table class="neutral"><tr class="neutral">
          <th>Nombre del Album</th> 
        <th>Artista/Grupo</th>   
        <th>País</th> 
        <th>Productora</th> 
      <th>Precio</th> 
           <th>Año</th> 
      </tr>    
      
      </table>
    
   <div id="resultado2"></div> 
  </div>
    
</div>
</body>
</html>