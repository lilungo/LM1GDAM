
function premio() {
            
    document.getElementById("b").disabled=true;
    var numero = Math.floor((Math.random() * 100) + 1);    
    
//            alert(numero);
    
  document.getElementById("numero").innerHTML="Número Obtenido<p><span class='numero'>"+numero+"</span>";
    
    if(numero >=1 && numero<=50){
       
       document.getElementById("premio").innerHTML="<i class='fas fa-window-close fa-2x'></i><span class='mensaje'>Lo sentimos, el número no está premiado</span>";
       
        }else
            if(numero >50 && numero <=75){
        document.getElementById("premio").innerHTML="<span class='mensaje'>¡ PREMIO: Vuelve a Jugar !</span><p><img src='https://lh3.googleusercontent.com/-Ebz-xZfTi78/WRWmYIA6XYI/AAAAAAAABDQ/lD2qdBzdr2oOGjD7u6p0_tAqzO2EVwWIgCHM/s1600/338e5a3eb0c474ee75beb6307c13c7f2_tombola-related-keywords-tombola-long-tail-keywords-keywordsking-tombola-clipart_1046-644.png' width='300px'>";
        
            document.getElementById("b").disabled=false;
                
            }else
                if(numero >75 && numero <=90){
                document.getElementById("premio").innerHTML="<span class='mensaje'>¡ PREMIO: Un peluche de Snoop Dogg!</span><p><img src='https://ae01.alicdn.com/kf/S94e349a067cb495b989ec387797afbf9I.jpg_640x640q90.jpg' width='300px'>"
                
            }else {
                document.getElementById("premio").innerHTML="<span class='mensaje'>¡ PREMIO: Nike AirMax Plus !</span><p><img src='https://encrypted-tbn2.gstatic.com/shopping?q=tbn:ANd9GcSyYpO4W6JuY7l7pPR_UnRaPkPfonnpTCqYyeiSJh7B--1FZXnfcGdgduMX1ev4AAziDjrLDQmvChyj2JQXt32EbKzz6rjByObvmUsaRBX2Li03DMk32Ytc2qMWIU0kVtuye-STTPQ6&usqp=CAc' width='300px'>"
            }
}
