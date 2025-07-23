<?php
    
   
    $x1 = $_GET["x1"];
    $x2 = $_GET["x2"];
    $y1 = $_GET["y1"];
    $y2 = $_GET["y2"];
  

    $c1 = $x2 - $x1;
    $c2 = $y2 - $y1;

    $dist = sqrt($c1**2 + $c2**2);

    

    echo "La distancia es: " .$dist;

?>
