<?php
function read($pathRead = "read.txt"){ //Путь к файлу для чтения: read.txt
   $fopen=file($pathRead);
   for ($i=0; $i < count($fopen); $i++) { 
       	 $text = [];
         $text = $fopen;  
    }
    return $text;
}
function write($pathWrite = "write.txt"){ //Путь к файлу для записи: write.txt
	$newFile = fopen($pathWrite, "w");
	$textWrite = read();
	$str = implode($textWrite);
    fwrite($newFile, $str);
}
read();
write();