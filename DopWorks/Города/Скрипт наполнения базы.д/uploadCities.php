<?php
$connect = mysqli_connect('127.0.0.1', 'root', '', 'test');
$cities = file('cities.txt');
$arr = [];
foreach ($cities as $key => $value) {
   $result = preg_split('//u', $value, null, PREG_SPLIT_NO_EMPTY);
   foreach ($result as $k => $v) {
   	   if ($v === ',') {
        $str = implode($arr);
        mysqli_query($connect, "INSERT INTO `usedcities` (`city`, `used`) VALUES ('$str', 'No')");
        $arr = [];
       }else{
     	$arr[] = $v;
       }
   }

}
mysql_close($connect);
?>
