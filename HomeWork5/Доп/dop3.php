<!DOCTYPE html>
<html>
<head>
	<title>Без остатка</title>
</head>
<body>
<form method="post">
	<input type="number" name="numb" placeholder="Ваше число">
	<input type="submit" name="sub" value="OK">
	<br><br>

</form>
<?php
$number = $_POST['numb'];
if (!empty($number) && ($number !== '' && $number !== ' ')) {
	for ($i=1; $i <= 100; $i++) { 
       $res = $number / $i;
       if (!is_float($res)) {
            echo "<p style = 'color:green;'>$number - делиться на $i - без остатка и равняеться : $res </p>";
       }else{
       	    // echo "<p style = 'color:red;'>$number - НЕ ДЕЛИТЬСЯ на $i - без остатка и равняеться : $res </p>";
       }
	}
}

?>
</body>
</html>