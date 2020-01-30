<!DOCTYPE html>
<html>
<head>
	<title>lvl2</title>
</head>
<body>
<style type="text/css">
	#som{
       text-align: center;
	}
</style>

<div id="div1">
  <form method="post">
	<input type="number" name="num" placeholder="Ваш номер ..."><br><br>
	<input type="submit" name="sub" value="Отправить" id="sub"><br><br>
  </form>
</div>
<div id='som'>
<?php  
$number = (int)$_POST['num'];
$x = 0;
$s = " ";
if (isset($number)) {
   for ($i=0; $i <= $number; $i++) { 
      if ($i % 2 !== 0) {
      	if ($x === 0) {
      		$x++;
      		echo "* <br><br>";
      		
      	}
      	elseif ($x === 1) {
      		$x++;
      		echo "*<br>";
      		echo "***<br>";
      		echo "*<br><br>";
      		
      	}
      	elseif ($x === 2) {
      		$x = 0;
      		echo "*<br>";
      		echo "***<br>";
      		echo "*****<br>";
      		echo "******* <br>";
      		echo "*****<br>";
      		echo "***<br>";
      		echo "*<br><br>";

      	}
      }
    }
}

?>
</div>
</body>
</html>