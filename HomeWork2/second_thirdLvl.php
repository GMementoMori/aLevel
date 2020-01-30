<!DOCTYPE html>
<html>
<head>
	<title>Second/Third Level</title>
	<meta charset="utf-8">
</head>
<body>
<h1>Задача fizz-buzz:</h1>
<h3>Заполните поля ввода.</h3>
<form method="post">
       <input type="number" name="FIZZ" placeholder="FIZZ"><br><br>
       <input type="number" name="BUZZ" placeholder="BUZZ"><br><br>
       <input type="number" name="userNumber" placeholder="Любое число"><br><br>
       
	   <input type="submit" name="sub" value="OK">
</form><br>
<?php 
if (isset($_POST['FIZZ'], $_POST['BUZZ'], $_POST['userNumber'])) {
  $fizz = (int)$_POST['FIZZ'];
  $buzz = (int)$_POST['BUZZ'];
  $userNumber = (int)$_POST['userNumber'];
  if (!empty($fizz) && !empty($buzz) && !empty($userNumber)) {
  	/*Третий уровень так же можно засчитать, кротчайший вариант, 
  	  если заменить переменные числами: */
      for ($i=1; $i <= $userNumber; $i++) { 

         if ($i % $fizz === 0 && $i % $buzz !== 0) {
   	         echo " - F";
         }
         else if ($i % $buzz === 0 && $i % $fizz !== 0) {
   	         echo " - B";
         }
         else if ($i % $buzz === 0 && $i % $fizz === 0) {
   	         echo " - BF";
         }
         else{
   	         echo " - $i";
         }
        }
    }
    else{
       echo "Заполните все поля для ввода.";
    }
}else{
	echo "Заполните все поля для ввода.";
}

?>
</body>
</html>