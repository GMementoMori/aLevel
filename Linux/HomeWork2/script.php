<?php
if (isset($argv[1])) {
  if ($argv[1] !== '-h' && $argv[1] !== '--help') {

	 $f = file($argv[1]);
	 $mainWord = $argv[2];
	 $mainWordLower = strtolower($mainWord);
	 $str_word = '';
	 $cW = 0;
	 for ($i=0; $i < count($f); $i++) { 
	     $q = preg_split('~[^\p{L}\p{N}\']+~u',$f[$i]);
         foreach ($q as $k => $v) {
       	     $select = strtolower($v);
       	     if ($select === $mainWordLower) {
                 $cW++;
                 if (!empty($str_word)) {
                    $str_word .= ', ';
                 }
                 $str_word .= $i + 1;
       	     }
           }
      }
      $l1 = "Строк в файле : '".$argv[1]."' : $i\n";
      $l2 = "Слов '$mainWord' в файле : $cW\n";
      $l3 = "Слова встречаються в строках под номером: $str_word\n";
      echo $l1;
      echo $l2;
      echo $l3;
      if (isset($argv[3])) {
	      $result = $l1 . $l2 . $l3;
	      $handle = fopen($argv[3], "w");
	      fwrite($handle, $result);
      }
    }else{
    	echo " Команда для использования скрипта: \n php script.php ['путь к файлу'] ['слово которое вы ищите'] ['путь к файлу для записи результата'(опционально)]\n";
    }
}else{
	echo "Введите аргументы для програмы!\n";
}



?>

