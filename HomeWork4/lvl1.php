<?php
function numbers(){
  $maxNumber = max($arr = [1,2,3,4,5,6,7,8,9,1717,11,12,13,14,15,16]);
  echo "Самое большое число в масиве: $maxNumber <br><br>";
  // unset($maxNumber);
}
function strings(){
    $arr = ["some tex", "ahauydga uwd", "Helloooooooo WOOOOOOORLD!", "iuwf iawubfa", "kwbi"];
    foreach ($arr as $key => $value) {
    	$len[$key] = strlen($value);
    	$maxLen = max($len);
    }
    foreach ($arr as $k => $v) {
    	$l[$k] = strlen($v);
    	$m = max($l);

    	if ($maxLen === $m) {
    		echo "Самая длинная строка в массиве: $v содержит: $m символов<br>" ;
            // unset($maxLen);
    		break;
    	}
    }
    
}
numbers();
strings();
