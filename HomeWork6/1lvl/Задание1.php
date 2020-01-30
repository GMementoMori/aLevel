<!DOCTYPE html>
<html>
<head>
	<title>Curier</title>
</head>
<body>
<style type="text/css">
	h1{
		margin-left: 25%;
		border-radius: 25%;
		border:3px solid grey;
		width: 49%;
		background-color: grey;
	}
	#div1{
		margin-left: 42%;
	}
	#sub{
		margin: 10px 0px 0px 50px;
	}
	#div2{
		text-align: center;
	}
	li{
       color:green;
	}
</style>
<?
$mainThem = '<div id = "h1Div"><h1>Оформим курьерскую доставку? ;)</h1></div>';
echo "$mainThem";
?>
<div id="div1">
  <form method="post">
	<input type="text" name="dom" placeholder="Номер вашего дома ..."><br>
	<input type="text" name="kv" placeholder="Ваша квартира ..."><br>
	<input type="text" name="eta" placeholder="Ваш этаж ..."><br>
	<input type="text" name="pod" placeholder="Ваш подъезд ..."><br>
	<input type="text" name="ul" placeholder="Ваша улица ..."><br>
	<input type="submit" name="sub" value="Отправить" id="sub"><br><br>
  </form>
</div>
<div id="div2">
	 <ul>
<?php

 if (!empty($_POST)) {
    $dom = $_POST['dom'];
    $kv = $_POST['kv'];
    $eta = $_POST['eta'];
    $pod = $_POST['pod'];
    $ul = $_POST['ul'];
  	if ($dom !== '' && $dom !== ' ') {
  	  	 	echo "<h3>Курьерская доставка оформлена! </h3>";
            echo "<li>Ваша улица - $ul</li>";
            echo "<li>Ваш дом - $dom</li>";
            echo "<li>Ваш подъезд - $pod</li>";
            echo "<li>Ваш этаж - $eta</li>";
            echo "<li>Ваша квартира - $kv</li>";
  	  	 
  	}else{
  	     echo "<h3>Заполните все поля!</h3>";
  	}
}

?>
     </ul>
</div>
</body>
</html>