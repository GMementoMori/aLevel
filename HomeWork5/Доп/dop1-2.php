<?php
$res1 = 0;
$res2 = 0;
$numbers = '123456789';   //первое задание
$chars = preg_split("//", $numbers, -1, PREG_SPLIT_NO_EMPTY);
foreach ($chars as $key => $value) {
	$res1 += $value;
	
}
echo "Сума чисел в сроке - $res1 <br>";

$numb = '123876453487657621244'; //второе задание
$cha = preg_split("//", $numb, -1, PREG_SPLIT_NO_EMPTY);
foreach ($cha as $k => $v) {
	if ($v == 5) {
		$res2++;
	}
}
echo "Число 5 в строке повторяеться : $res2";