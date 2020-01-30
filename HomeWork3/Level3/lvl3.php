<?php
function read($pathRead = "read.txt"){ //Путь к файлу для чтения: read.txt
   $fopen=file($pathRead);
   $text = [];
   for ($i=0; $i < count($fopen); $i++) { 
       	$text = $fopen;  
   }
   return $text;
}

function fizzBuzz($pathWrite = "write.txt"){ //Путь к файлу для записи: write.txt
	$newFile = fopen($pathWrite, "w");
	$numberArr = read();
	$chars = preg_split("//", $numberArr[0], -1, PREG_SPLIT_NO_EMPTY);
  $fizzKeys = [];
  $buzzKeys = [];
  $userNumberkeys = [];
  $co = 0;

  foreach ($chars as $l => $r) {  //Перебираю данные в массив с первой строки в файле, для fizz and buzz
        if (is_numeric($r) && $co === 0) { //Этот цикл для отображения в масиве двойных чисел вместе 
             $fizzKeys[] += $r;
        }
        elseif($r === ';' && $co !== 1){
          $co = 1;
        }
        elseif(is_numeric($r) && $co === 1){
          $buzzKeys[] += $r;
        }
        elseif($r === ';' && $co === 1){
          $co = 2;
        }
  }

  $fz = implode($fizzKeys); //Преобразование масива fizzbuzz в строку
  $bz = implode($buzzKeys);
  $newArr = [];
  $lastArr = [];
  foreach ($numberArr as $b => $v) { //Так же преобразовую числа с отальных строк, которые идут 3 параметром
      if ($b !== 0) {
          $newArr = preg_split("//", $v, -1, PREG_SPLIT_NO_EMPTY);

          foreach ($newArr as $j => $w) {
            if (is_numeric($w)) {
              $lastArr[] += $w;
            } 
            elseif(!is_numeric($w)){
              $var = implode($lastArr); //Преобразование масива счислом в строку
              $lastArr = '';
              
               if ($var % $fz === 0 && $var % $bz !== 0) { //Заполнение файла во время цикла
                  fwrite($newFile, 'F -');
                }
               else if ($var % $bz === 0 && $var % $fz !== 0) {
                  fwrite($newFile, 'B -');
                }
               else if ($var % $bz === 0 && $var % $fz === 0) {
                  fwrite($newFile, 'FB -');
                }
               else if ($var % $bz !== 0 ) {
                  fwrite($newFile, "$var -");
                }
            }
          }
      } 

  }

}
read();
fizzBuzz();