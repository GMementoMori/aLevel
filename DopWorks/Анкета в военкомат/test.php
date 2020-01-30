<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8"/>
  <meta name="viewport" content="width = device-width, user-scalable=no,
      initial-scale = 1.0, maximum-scale = 1.0, minimum-scale = 0.5">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  
  <title>Анкета от военкомата</title>
  <script type="text/javascript" src="jQuery.js"></script>
  <link href="test.css" rel="stylesheet" type="text/css"/>
  <link href="https://fonts.googleapis.com/css?family=Lobster&display=swap" rel="stylesheet"> 
  <link href="https://fonts.googleapis.com/css?family=Marck+Script&display=swap" rel="stylesheet"> 
</head>
<body> 
<h3>Ваши данные для военкомата ;)</h3>
<form>
<input type="text" name="name" class = 'info' placeholder="Ваше имя..."><br><br>
<input type="text" name="surname" class = 'info' placeholder="Ваша фамилия..."><br><br>
<input type="text" name="age" class = 'info' placeholder="Ваш возраст..."><br><br>
<input type="text" name="weight" class = 'info' placeholder="Ваш вес..."><br><br>	
<input type="text" name="hight" class = 'info' placeholder="Ваш рост..."><br><br>
<input type="text" name="adress" class = 'info' placeholder="Ваш адресс..."><br><br>
<input type="button" name="sub" id = "sub" value="OK"><br><br><br>	
</form>
<?php
function human($r){

    $name = $r['values'][0];
    $surname = $r['values'][1];
    $age = $r['values'][2];
    $weight = $r['values'][3];
    $hight = $r['values'][4];    
    $adress = $r['values'][5];

   if ($age >= 20) {
      echo "<h4>Вы готовы отдать долг родине!</h4>";
      echo "<ul style = 'color:green;'>";
      echo "<li>Вас зовут : $surname $name</li>";
      echo "<li>Вы весите -  $weight</li>";
      echo "<li>Вам - $age лет</li>";
      echo "<li>Ваш адресс - $adress</li>";
      echo "</ul>";
    }
    elseif($age < 20){
      echo "<h4>Подрости для армии (</h4>";
      echo "<ul style = 'color:red;'>";
      echo "<li>Вас зовут $surname $name</li>";
      echo "<li>Вы весите $weight</li>";
      echo "<li>Вам $age лет</li>";
      echo "<li>Ваш адресс - $adress</li>";
      echo "</ul>";
    }    	
}
$i = 0;
try { 
  foreach ($_POST as $key => $value) {
     $i++;
  	 if ($value[$i] !== '' && $value[$i] !== ' ') {
        human($_POST);
     }
     else{
        throw new Exception("Вы заполнили не все поля!");
     }
    }
}
catch(Exception $e) {
  echo "<div style = 'color:red;'>";
  echo '-Ошибка: ' . $e->getMessage() . "<br>";
  echo "-Исправте это пожалуйста!";
  echo "</div>";
}

?>
<script type="text/javascript" src="js.js"></script>
</body>
</html>
