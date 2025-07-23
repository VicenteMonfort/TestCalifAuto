<?php
    
   
    $horas = $_GET["h"];
    $sueldo = $_GET["s"];
    
  

    $total = $horas * $sueldo;
   

    echo "El jornal que vas a recibir es: " .$total;

    

?>
