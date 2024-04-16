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
            var calorias=560;
            //alert (calorias);
        break;
        
          case 1:
            //alert ('segundo choco');
            var calorias=520;
            //alert (calorias);
        break;
        
          case 2:
            //alert ('tercer choco');
            var calorias=570;
            //alert (calorias);
        break;
        
        case 3:
            //alert ('cuarto choco');
            var calorias=540;
            //alert (calorias);
        break;
        
        case 4:
            //alert ('quinto choco');
            var calorias=520;
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
    
                
        }
        /*function limpito(){
            
            document.getElementById("Kcal").value="";
        }*/
        
        /*Otra opcion
        
        function chocolate() {
                var lista;
                lista = document.getElementById("opciones");
                var valorElegido = lista.options[lista.selectedIndex].value;
                var x;
                var result;
                switch(valorElegido){
                    case "a":
                        x=5.6;
                        result = (document.getElementById("gramos").value * x) / 1000;
                        break;
                    case "b":
                        x=5.2;
                        result = (document.getElementById("gramos").value * x) / 1000;
                        break;
                     case "c":
                        x=5.7;
                        result = (document.getElementById("gramos").value * x) / 1000;
                        break;
                    case "d":
                        x=5.4;
                        result = (document.getElementById("gramos").value * x) / 1000;
                        break;
                    case "e":
                        x=5.2;
                        result = (document.getElementById("gramos").value * x) / 1000;
                        break;
                }
                document.getElementById("result").innerHTML=result;
    
            }
    
            }*/