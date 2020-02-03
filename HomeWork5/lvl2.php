<!DOCTYPE html>
<html>
<head>
	<title>Простые числа</title>
</head>
<body>
<h1>Вывод простых чисел: </h1>
<form method="post">
	<input type="number" name="numb" placeholder="Ваша цифра...">
    <input type="submit" name="sub" value="OK">
</form>
<ul>
<?php
// define("Number", 100);

function numb($t){
 $co = 0 ;
 for ($x = 1; $x < $t; $x++){     // либо передавать константу на место $t
     for ($i=1; $i <= $x; $i++){
         if ($x % $i === 0){
             $co++ ;
         }
     }
     if ($co <= 2){
         echo "<li style='color:green;'>Простое число: " . $x . "</li>";
     }else{
        echo "<li style='color:red;'>Сложное число: " . $x . "</li>";
     }

     $co =0 ;
    } 
}
if (!empty($_POST['numb']) && ($_POST['numb'] !== '' && $_POST['numb'] !== ' ')) {
	$e = $_POST['numb'];
    numb($e);
}          
?>
</ul>
</body>
</html>

