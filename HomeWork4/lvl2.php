<?php
function settle(){
   $arr = ['bs', 'as', 'sds adasd', 'aw dad awd s', 'tqu ih iq iv', 'ufyw g fuyau', 'uyhw ua wd iu uawyda auywdbajz'];
   asort($arr, SORT_STRING);
   $i = 0;
   foreach ($arr as $key => $value) {
	  $chars = preg_split("//", $value, -1, PREG_SPLIT_NO_EMPTY);
      echo "Строка: $value <br>";
      foreach ($chars as $k => $v) {
            if ($v !== ' ') {
              	$i++;
            }
       	   
       }
       echo "Количество букв: $i <br><br>";
   }
}
settle();