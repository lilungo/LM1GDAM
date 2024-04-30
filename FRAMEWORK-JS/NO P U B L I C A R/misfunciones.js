function pwcheck() {
    var contrasena, i=0;
    while(contrasena!="acceso" && i<3) {
    contrasena=prompt("Introduzca la contraseña","");
    i++;
    }
    if (contrasena=="acceso") {
    location.href="http://www.google.es";
    }
    else {
    alert("La contraseña no es correcta después de 3 intentos ¡y lo peor es que  era fácil! ");
    }
}

