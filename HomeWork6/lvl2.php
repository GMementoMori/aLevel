<?php

$arr1 = ['sjdgasfydsa', 'asas dyuasyd', 'eukfgu egfy', 'aywfytwegi', 'wad ywawat'];
$arr2 = ['asas dyu dsaasyd', 'kasb egfy', 'aywfyt', 'w at', 'ashdu'];

function arrs($x,$y){
  $v1 = array_map('strlen', $x); //Узнаем длину всех строк масивов..
  $v2 = array_map('strlen', $y);
  $c = 0;
  $maxDif = [];
  if (count($v1) !== count($v2)) {
     throw new Exception("Количество строк в масивах не совпадает"); // проверяем на одинаковую длину
  }
  else{
  	 $c = count($v1);          //записываем общее кол.во ключей в масивах
  }
  echo "<h4>Количество строк в массивах должно совпадать!</h4>";
  for ($i=0; $i < $c; $i++) { 
  	 $res = $v1[$i] % $v2[$i];     //записываем разницу дины каждых строк в масивах по модулю в переменную
  	 echo "<ul>";
  	 echo "<li>$v1[$i] - строка с первого масива </li>";
  	 echo "<li>$v2[$i] - строка со второго масива </li>";
  	 echo "<li>Разница по модулю в $i.Строках в массивах = $res </li>"; 
  	 echo "</ul>";
  	 echo "<hr>";
     $maxDif[] += $res; //записуем все результаты в масив для проверки максимальной разницы
  }
  $resultMax = max($maxDif);
  if ($resultMax < 0) {
     throw new Exception("Число являеться меньше нуля!"); //проверяем на отрицательность чисел
  }
  else{
  	return $resultMax;
  }
}

try {
  
  $mLen = arrs($arr1,$arr2);
  echo "Максимальная разница в длиннах масивов : $mLen";
}
catch(Exception $e) {
  echo '-Ошибка: ' . $e->getMessage() . "<br>";
  echo "-Исправте это пожалуйста!";
}