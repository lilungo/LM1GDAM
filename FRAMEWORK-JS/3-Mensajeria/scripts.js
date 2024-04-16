
function calcular() {

    //Capturo los valores y los convierto en números con parseInt (función global)
    var carta = parseInt(document.getElementById("cartas").value);
    var paquetes = parseInt(document.getElementById("paquetes").value);

    //Comienzo las comparaciones definidas	

    if (carta < 0 || paquetes < 0) {


        document.getElementById('mensajeError').innerHTML = '<h3 style="color:red;"><i class="fa fa-exclamation-triangle" aria-hidden="true"></i> Error al introducir los datos, presta atención (mendrugo)!</h3>';
        document.getElementById('cartas').focus;
        document.getElementById('cartas').value = '0';
        document.getElementById('paquetes').focus;
        document.getElementById('paquetes').value = '0';

        noBoton();


    } else {//Si llegamos aqui, oculto error, muestro botón y hacemos cálculos


        document.getElementById('funcionalidad').style.display = "inline";
        document.getElementById('mensajeError').innerHTML = '';

        //Aqui defino las nuevas variables para trabajar con los datos capurados anteriormente y realizar los cálculos

        var total = carta + paquetes;
        var pvpSinIva = total * 3;//valor que definimos por defecto
        var totalIva = (pvpSinIva * 1.21).toFixed(2);
        var iva = (totalIva - pvpSinIva).toFixed(2);

        //A partir de aqui vuelco cada valor en la caja correspondiente

        document.getElementById('mensaje1').innerHTML = total;
        document.getElementById('mensaje2').innerHTML = pvpSinIva + ' €';
        document.getElementById('mensaje3').innerHTML = iva + ' €';
        document.getElementById('mensaje4').innerHTML = "<span class='zoom' style='margin-right:10px;margin-left:10px;'>" + totalIva + ' €' + "</span>";
    }
}

function noBoton() {

    document.getElementById('funcionalidad').style.display = "none";

}