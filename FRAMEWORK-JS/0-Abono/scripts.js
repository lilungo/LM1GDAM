function verabono() {
    var edad = document.getElementById('cedad').value;
    var abono;
    //con document.getElementById('textoc').innerHTML conseguimos sobrescribir el ID que le indicamos, incluso podemos modificar sus atributos
    if (edad <= 0) {

        document.getElementById('textoc').innerHTML = '<img src="img/error.png" style="vertical-align:middle;"><h3 style="color:red;display:inline;"> ¡Estas tont@ o qué !, ' + edad + ' no es correcto ¿demasiada Play?</h3>';
    } else {
        if (edad <= 25) {
            abono = '<span class="joven">Joven</span>';
        } else
        if (edad >= 65) {
            abono = '<span class="TerceraEdad">Tercera Edad</span>';
        } else {
            abono = '<span class="normal">Normal</span>';
        }
        document.getElementById('textoc').innerHTML = "<h3 style='color:green;'>La edad que ha introducido es " + edad + " años.<p /> El abono que le corresponde es " + abono + "</h3>";

        //Esta es una forma de cambiar el color del div

        //var antiguotexto = document.getElementById('textoc').innerHTML;
        //var nuevotexto = "<span style='color:black'>" + antiguotexto + "</span>";
        //document.getElementById('textoc').innerHTML = nuevotexto;
    }

}
