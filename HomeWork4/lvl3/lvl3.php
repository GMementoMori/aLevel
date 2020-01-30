<!DOCTYPE html>
<html>
<head>
  <title>lvl3</title>
</head>
<body>

<form method="post">
  <input type="number" name="fizz" placeholder="Число для Fizz"><br>
  <input type="number" name="buzz" placeholder="Число для Buzz"><br>
  <input type="submit" name="sub" value="OK"><br>
</form>
<?php
$handle = file('read.txt');

function fxb ($r){

  function xxxy($number){
     $fizz = $_POST['fizz'];
     $buzz = $_POST['buzz'];

        if (isset($fizz) && isset($buzz)) {

          if (isset($number)) {

            if ($number % $fizz === 0 && $number % $buzz !== 0) {
               echo "F -";
            }
            else if ($number % $buzz === 0 && $number % $fizz !== 0) {
               echo "B -";
            }
            else if ($number % $buzz === 0 && $number % $fizz === 0) {
               echo "BF -";
            }
            else if ($number % $buzz !== 0) {
               echo " $number -";
            }
          }
        }
        else{
          echo "Заполните поля вводов!";
        }
  }
  $chars = preg_split("//", $r, -1, PREG_SPLIT_NO_EMPTY);
  array_map('xxxy', $chars);
}
array_map('fxb', $handle);

?>
</body>
</html>