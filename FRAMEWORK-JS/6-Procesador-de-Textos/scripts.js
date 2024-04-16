/*Creamos una sola función llamada formato donde declaramos las diferentes variables asociadas a la propiedad que deseamos cambiar  */

        //   Opcion 2: Tendríamos más control creando una funcion para cada caso de formato

        /*Emplearemos para aplicar formato el objeto del DOM expresamente diseñado apra éstas operaciones y que es el objeto Style del DOM http:www.w3schools.com/jsref/dom_obj_style.asp*/

        function formato() {

            //select tamaño texto
                var tam_texto;
    
            tam_texto = document.getElementById("tamanyo").value;
            document.getElementById("texto").style.fontSize = tam_texto + "px";
    
            //var tipo_texto;
                var tipo_texto = document.getElementById("tipo").value;
                document.getElementById("texto").style.fontFamily = tipo_texto;
                
                var color_texto;
                color_texto = document.getElementById("color").value;
                document.getElementById("texto").style.color = color_texto;
    
                //Select interlineado
                
                
                var interlineado;
                
                interlineado = document.getElementById("interlineado").value;
                document.getElementById("texto").style.lineHeight = interlineado;
                
                var negrita;
                negrita = document.getElementById("negrita").checked;
                if (negrita == true) {
                    document.getElementById("texto").style.fontWeight = "bold";
                } else {
                    document.getElementById("texto").style.fontWeight = "normal";
                }
    
                var cursiva;
                cursiva = document.getElementById("cursiva").checked;
                if (cursiva == true) {
                    document.getElementById("texto").style.fontStyle = "italic";
                } else {
                    document.getElementById("texto").style.fontStyle = "normal";
                }
    
                var subrayado;
                subrayado = document.getElementById("subrayado").checked;
                if (subrayado == true) {
                    document.getElementById("texto").style.textDecoration = "underline";
                } else {
                    document.getElementById("texto").style.textDecoration = "none";
                }
    
                var alineacion;
                if (document.getElementById("izquierda").checked == true)
                    alineacion = "left";
                if (document.getElementById("derecha").checked == true)
                    alineacion = "right";
                if (document.getElementById("centro").checked == true)
                    alineacion = "center";
                if (document.getElementById("justificado").checked == true)
                    alineacion = "justify";
    
                document.getElementById("texto").style.textAlign = alineacion;
            }  
            //-->