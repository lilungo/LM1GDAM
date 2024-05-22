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
  //https://www.w3schools.com/xml/ajax_xmlhttprequest_response.asp
    {
   	 var xmlDoc=conexion.responseXML;
	 
	 //empleamos un responseXML en lugar de un responseText y lo almacenamos en la variable
   	 
	var txt="<table>";
    //Creamos una variable txt que la definimos como "<table>";
	
	//A partir de aqui definimos las variables que necesitemos para almacenar el contenido de cada una de las etiquetas XML
	//y que recogemos con TagName solo de las etiquetas que tienen valor a mostrar
	
        //Además, para que le bucle sea más sencillo de tratar en lugar de definir la variable titulo, la hemos reacondicionado por x
	
        equipo=xmlDoc.getElementsByTagName("equipo");
        ciudad=xmlDoc.getElementsByTagName("ciudad");
        entrenador=xmlDoc.getElementsByTagName("entrenador");
        camiseta=xmlDoc.getElementsByTagName("camiseta");
        
/*         anio=xmlDoc.getElementsByTagName("anio");
 */    
	//Creamos el bucle en el que incluimos la tabla (variable txt) y pintamos línea a línea el primer nodo de cada índice del array que representan los elementos en el XML
        
	
    for (i=0;i<equipo.length;i++)
      {
        txt=txt + "<tr><td>" + equipo[i].childNodes[0].nodeValue +"</td><td>"+ ciudad[i].childNodes[0].nodeValue+ "</td><td>"+ entrenador[i].childNodes[0].nodeValue+ "</td><td>"+ camiseta[i].childNodes[0].nodeValue+ "</td><td>";
       }
    document.getElementById("resultado2").innerHTML=txt;
    }
  }
  
  txt=txt+'</table>'
  
  //Añadimos la apertura de la conexión y la enviamos
  
  conexion.open("GET","lfp.xml",true);
  conexion.send();
  
  
}