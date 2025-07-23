<?php
    
    defines("PI",3.14);
    $h = $_GET["h"];
    $r = $_GET["r"];
  

    area1 = (PI * $r**2)/2 ;
    $area2 = $r * $h; //no divido entre 2 porque no multiplico el radio por 2

    $area = $area1 + area2;

    echo "El area es: " .$area;

?>
