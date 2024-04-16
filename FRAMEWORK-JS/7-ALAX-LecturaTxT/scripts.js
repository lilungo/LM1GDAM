function iniciar(){
    
    var conexion;
	
	conexion=new XMLHttpRequest();
	
	//Creamos el Objeto y comprobamos que es soportado por el navegador y en caso contrario estamos ante una versión antigua de IExplorer y procedemos a cargarlo como control Active X
	
	if (window.XMLHttpRequest){
		
		conexion=new XMLHttpRequest();
        
		}else{
			//para versiones obsoletas de IExplorer
			
            conexion=new ActiveXObject("Microsoft.XMLHTTP");
			
		}
		
		conexion.onreadystatechange=function(){
            
            if(conexion.readyState==4&&conexion.status==200){
        
        //Contendor de respuesta
		      
        document.getElementById("resultado2").innerHTML=conexion.responseText;
            }
			
        }
		
		
//Una vez que ya tenemos el objeto creado procedemos a la apertura y envío de la peticion

			conexion.open("GET","quijote.txt",true);
			conexion.send();
    }