function borraCaja(){

document.getElementById('navegadorusuario').value= ' '; //refrescar
document.getElementById('navegadorusuario').focus();

}

function navegador() {
    //se definen las variables, y pasamos a minusculas el texto para evitar errores
    //Metodo del Objeto string http://www.w3schools.com/jsref/jsref_obj_string.asp - toLowerCase
    var nav = document.getElementById('navegadorusuario').value;

    var resultado;

    nav = nav.toLowerCase();

    switch (nav) {
        case 'explorer':
            resultado = '<img src="https://upload.wikimedia.org/wikipedia/commons/thumb/1/18/Internet_Explorer_10%2B11_logo.svg/1043px-Internet_Explorer_10%2B11_logo.svg.png" width="250px"> ';
            break;
        case 'firefox':
            resultado = '<img src="https://upload.wikimedia.org/wikipedia/commons/thumb/a/a0/Firefox_logo%2C_2019.svg/800px-Firefox_logo%2C_2019.svg.png"width="250px">';
            break;
        case 'chrome':
            resultado = '<img src="https://cdn.pixabay.com/photo/2016/04/13/14/27/google-chrome-1326908_960_720.png" width="250px">';
            break;
        case 'opera':
            resultado = '<img src="https://upload.wikimedia.org/wikipedia/commons/thumb/4/49/Opera_2015_icon.svg/1200px-Opera_2015_icon.svg.png" width="250px">';
            break;
        default:
            resultado = '<i class="fa fa-exclamation-triangle fa-2x" aria-hidden="true"></i>Navegador desconocido o mal escrito';
            break;
    }
    //sustituimos el valor del div por el resultado

    document.getElementById('textoc').style.color = "red";
    document.getElementById('textoc').style.backgroundColor = "lightgrey";
    document.getElementById('textoc').style.fontSize = "1.6em";
    document.getElementById('textoc').style.padding = "10px";

    document.getElementById('textoc').innerHTML = resultado;
}
    //Como solo tengo un mensaje de texto que quiero en rojo podría emplear un estilo o directamente javascript.

    // NOTA

    //Lo ideal seria que los valores a evaluar fueran seleccionables a través de un select, evitando así las posbilidades de error del usuario y simplificando la programación en general