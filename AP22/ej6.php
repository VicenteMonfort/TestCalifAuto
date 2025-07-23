<?php
    
    define("G",3.785);
    $litros = $_GET["l"];
    $precio = $_GET["p"];
  

    $galones = $litros / G ;
    $total = $galones * $precio;

    

    echo "Te van a pagar: " .$total;

?>
