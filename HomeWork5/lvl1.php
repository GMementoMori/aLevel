<?
define("Number", 5);
?>
<!DOCTYPE html>
<html>
<head>
	<title>lvl1</title>
</head>
<body>
<h1>*Числа которые деляться на "<?echo Number?>"</h1>
<p>По какое число вы хотите проверить деление на "<?echo Number?>"?</p>
<form method="POST">
	<input type="number" name="numb" placeholder="Введите ваше число!">
	<br><br>
	<input type="submit" name="sub" value="OK">
</form>
<br>

<?php
$userNumb = (int)$_POST['numb'];
for ($i=0; $i <= $userNumb; $i++) { 
	if ($i % Number === 0) {
		echo "$i - Делиться на " . Number . "<br>";
	}
}
?>
</body>
</html>
