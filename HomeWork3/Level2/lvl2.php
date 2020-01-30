<?php

function read($pathRead = "read.txt"){ //Путь к файлу для чтения: read.txt
   $fopen=file($pathRead);
   for ($i=0; $i < count($fopen); $i++) { 
       	 $text = [];
         $text = $fopen;  
    }
    return $text;
}
function change(){
	$Arr_str = read();
	$result = [];
	$resultId = [];
    for ($i=0; $i < count($Arr_str); $i++) { 
    	$arr = $Arr_str[$i];
    	$result[] += strlen($arr);
    }
	foreach ($result as $key => $value) {
		if ($value > 30) {
		     $resultId[] += $key;
	    }
	}
	return $resultId;
}
function write($pathWrite = "write.txt"){ //Путь к файлу для записи: write.txt
	$newFile = fopen($pathWrite, "w");
	$leng = change();
	$textW = read();

    foreach ($leng as $k => $v) {
        fwrite($newFile, $textW[$v]);
    }
    
    
}
read();
change();
write();