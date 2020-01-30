<?php
define("Number", 100);
$co = 0 ;
echo "<h1>Вывод простых чисел: </h1>";
for ($x = 1; $x < Number; $x++){
   for ($i=1; $i <= $x; $i++){
      if ($x % $i == 0){
          $co++ ;
       }
    }
    if ($co <= 2){
      echo "Простое число: " . $x . "<br>";
    }

    $co =0 ;
}        
?>
