
function reloj() {
    var hoy = new Date();
    var hora = hoy.getHours();
    var minuto = hoy.getMinutes();
    var segundo = hoy.getSeconds();
    var horaD = parseInt(document.getElementById("hora").value);
    var minutoD = parseInt(document.getElementById("minuto").value);
  
    if (minuto < 10) {
      minuto = "0" + minuto
    };
    if (segundo < 10) {
      segundo = "0" + segundo
    };
    if (hora == horaD && minuto == minutoD && segundo == 00) {
      window.open("https://www.youtube.com/watch?v=6K4sVc7bTlI");
      
    };
  
    var tm = document.getElementById("tm");
    tm.textContent = (hora + ":" + minuto + ":" + segundo);
  
  };
  
  setInterval(reloj, 1000);