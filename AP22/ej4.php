<?php
    
    $a = $_GET["a"];
    $b = $_GET["b"];
    $c = $_GET["c"];

    $area1 = $b * $c;
    $area2 = (($a-$c)*$b)/2;

    $area = $area1 + $area2;

    echo "El area es: " .$area;

?>
