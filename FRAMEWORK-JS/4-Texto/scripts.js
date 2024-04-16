function verificar() {
    var a = document.getElementById('caja').value;
    var b = a.toLowerCase();
    var c = a.toUpperCase();
    if (a ==b) {
        document.getElementById('texto').innerHTML = 'Tu texto está en <span class="resalta">minúsculas</span>';


    } else if (a == c) {
        document.getElementById('texto').innerHTML = 'Tu texto está en <span class="resalta">MAYÚSCULAS</span>';
    } else {
        document.getElementById('texto').innerHTML = 'Tu texto contiene<span class="resalta"> MAYÚSCULAS</span> y <span class="resalta">minúsculas</span>';
    }
    document.getElementById('caja').focus();
}