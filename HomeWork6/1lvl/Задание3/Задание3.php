<?php
function read($pathRead = "txt.txt"){ //Путь к файлу для чтения: read.txt
   $fopen=file($pathRead);
   $text = [];
   for ($i=0; $i < count($fopen); $i++) { 
       	$text = $fopen;  
   }
   return $text;
}
function func($y){
  $x = 0;
  $allVal = 0;
  $numberArr = read();
  $v1 = preg_split("//", $numberArr[$y], -1, PREG_SPLIT_NO_EMPTY);
  foreach ($v1 as $key => $value) {
     if ($value !== ';') {
        if ($value !== ' ') {
          $x++;
        }      
        @$allVal += $value;
      }
      else{
         break;
      }
  }

  $sum = $allVal / $x;
  echo "$allVal разделенное на $x = $sum<br>";
}
read();

$keys = array_keys(read());
foreach ($keys as $ke => $va) {
   func($va);
}
