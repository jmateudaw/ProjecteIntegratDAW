<?php
header("Content-Type: text/html;charset=utf-8");
   
 $num=6;

 //cálculo del factorial
 $resultado=1;

  for($i=1;$i<=$num;$i++){
    $resultado=$resultado*$i;
  }

  echo "El factorial es: " . $resultado;
?>