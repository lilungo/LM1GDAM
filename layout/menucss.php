<div class="topnav" id="myTopnav">
    <a href="../../Index.html" class="active">INICIO</a>

    <a href="../bootstrap/bootstrap.php" class="dropdown">Bootstrap</a>

<a href="../parallax/parallax.php" class="dropdown">Parallax</a>

    
    <div class="dropdown">
        <button class="dropbtn">RWD
            <i class="fa fa-caret-down"></i>
        </button>
        <div class="dropdown-content">
            <a href="../rwd/camisetas.php">CAMISETAS</a>
            <a href="../rwd/orla.php">ORLA</a>
            <a href="#">APUESTAS</a> 
        </div>
    </div>

    <div class="dropdown">
        <button class="dropbtn">FLEXBOX
            <i class="fa fa-caret-down"></i>
        </button>
        <div class="dropdown-content">
            <a href="../flexbox/coches.php">COCHES</a>
           <a href="../flexbox/operadoraflex.php">OPERADORA</a>
                  
        </div>
    </div>

    <div class="dropdown">
        <button class="dropbtn">BOXMODEL
            <i class="fa fa-caret-down"></i>
        </button>
        <div class="dropdown-content">
            <a href="../boxmodel/operadora.php">Operadora (Yoigo)</a>
            <a href="../boxmodel/modeloY.php">MODELO Y</a>
            <a href="../boxmodel/modeloX.php">MODELO X</a>
            <!-- <a href="#">SERVICIOS</a>
                  <a href="#">OPERADORA</a> -->
        </div>
    </div>
    <!-- <a href="#about">About</a> -->
    <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
</div>


<script>
    function myFunction() {
        var x = document.getElementById("myTopnav");
        if (x.className === "topnav") {
            x.className += " responsive";
        } else {
            x.className = "topnav";
        }
    }
</script> 