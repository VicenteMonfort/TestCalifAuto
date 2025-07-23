<?php
    
    define("PI",3.1416);
    $radio = $_GET["r"];
    
    $area = PI*($radio**2);

    echo "El area es: " .$area;

?>
