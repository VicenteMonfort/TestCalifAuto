<?php
    
    define("PUL",0.0254);
    $metros = $_GET["m"];
    
  

    $total =  $metros / PUL;
   

    echo "$metros metros son $total pulgadas";

    

?>
