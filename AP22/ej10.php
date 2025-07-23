<?php
    
    define("PRECIO",2);
    $a = $_GET["a"];
    $b = $_GET["b"];
    $c = $_GET["c"];
    
  

    $total =  $a*$b*$c*PRECIO;
   

    echo "Vas a pagar $total €";

    

?>
