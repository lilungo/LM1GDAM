function calcula(){
		
    var posicion=document.getElementById('tipo').options.selectedIndex; 
            //Un simple alert nos da la posicion del seleccionado en el desplegable
                //alert (posicion)
            //Mediante la propiedad options[posicion] obtenemos el texto
                //alert(document.getElementById('tipo').options[posicion].text); 
            //var tipo_choco=	document.getElementById('tipo').options[posicion].text;
            
                
    var calorias = 0;
    
    switch(posicion) {
      case 0:
            //alert ('primer choco');
            limpito();
            //alert (calorias);
        break;
        
          case 1:
            //alert ('segundo choco');
            var calorias=560;
            resultado = '<img src="negro_amargo.jpg"> ';
            //alert (calorias);
        break;
        
          case 2:
            //alert ('tercer choco');
            var calorias=520;
            resultado = '<img src="chocolate_taza.jpg"> ';
            //alert (calorias);
        break;
        
        case 3:
            //alert ('cuarto choco');
            var calorias=540;
            resultado = '<img src="chocolate_leche.jpg"> ';
            //alert (calorias);
        break;
        
        case 4:
            //alert ('quinto choco');
            var calorias=570;
            resultado = '<img src="chocolate_blanco.jpg"> ';
            //alert (calorias);
        break;
        case 5:
            //alert ('quinto choco');
            var calorias=70;
            resultado = '<img src="chocolate_light.jpg"> ';
            //alert (calorias);
        break;
        
      default:
        alert ('ninguno seleccionado');
        break;
    }
            
            var cantidad=document.getElementById('gramos').value;
            if (isNaN(cantidad)){
                
                alert ('tienes que poner una cantidad de gramos');
                
                //document.form1.gramos.focus();
                document.getElementById("gramos").value="";
                document.getElementById("gramos").focus();
                return false;
            }
            
            
            var total=(calorias*cantidad)/1000;
            document.getElementById('Kcal').value=total;

            document.getElementById('chocolatito').innerHTML = resultado;
    
                
        }
    function limpito(){
        document.getElementById("Kcal").value="";
        document.getElementById("gramos").value="100";
        document.getElementById("tipo").value="";
        document.getElementById('chocolatito').innerHTML = "";
    }