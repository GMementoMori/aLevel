<?php
$GLOBALS['connect'] = mysqli_connect('127.0.0.1', 'root', '', 'test');
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8"/>
  <meta name="viewport" content="width = device-width, user-scalable=no,
      initial-scale = 1.0, maximum-scale = 1.0, minimum-scale = 0.5">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
   
  <title>Студенческая база</title>
  <script type="text/javascript" src="jQuery.js"></script>
  <link href="test.css" rel="stylesheet" type="text/css"/>
  <link href="https://fonts.googleapis.com/css?family=Lobster&display=swap" rel="stylesheet"> 
  <link href="https://fonts.googleapis.com/css?family=Marck+Script&display=swap" rel="stylesheet"> 
</head>
<body> 
  <div>
   <h3>Введите ваши данные:</h3>
    <form>
      <input type="text" name="first_name" class = 'info' placeholder="Ваше имя..."><br><br>
      <input type="text" name="email" class = 'info' placeholder="Ваш email..."><br><br>
      <input type="text" name="tel" class = 'info' placeholder="Ваш номер телефона..."><br><br>	
      <input type="text" name="last_name" class = 'info' placeholder="Ваша фамилия..."><br><br>
      <input type="radio" name="gender" id = 'male' value="Мужчина"><label for="Мужчина"> Мужчина</label>
      <input type="radio" name="gender" id = 'famele' value="Женщина"><label for="Женщина"> Женщина</label><br><br>
      <input type="button" name="sub" id = "sub" value="OK"><br><br><br>	
    </form>
  </div>
<main>
<?php

$i = 0;
function resu(){
  $select = mysqli_query($GLOBALS['connect'], "SELECT * FROM `users` ");
  while ($r = mysqli_fetch_array($select)) {
    echo "<p title='Нажмите что бы удалить.' class='delete' id='".$r['id']."'>".$r['last_name'].' '.$r['first_name']."</p>";
  }
}

function del($id){    
  mysqli_query($GLOBALS['connect'], "DELETE FROM `users` WHERE `id` = '$id'");
}

function newhuman($r){
  if (!empty($r)) {
     $first_name = $r['values'][0];
     $email = $r['values'][1];
     $tel = $r['values'][2];
     $last_name = $r['values'][3];
     $gender = $r['values'][4];  
        mysqli_query($GLOBALS['connect'], 
        "INSERT INTO `users` (`first_name`, `email`, `tel`, `gender`, `last_name`) VALUES ('$first_name', '$email', '$tel', '$gender', '$last_name')"
        );
      // resu();
  }
}

if (isset($_POST['values'])) {
    foreach ($_POST as $key => $value) {
      $i++;
  	  if ($value[$i] !== '' && $value[$i] !== ' ') {
        newhuman($_POST);
      }
      else{
          echo "<div style = 'color:red;'>";
          echo "-Ошибка: Вы заполнили не все поля!";
          echo "</div>";
      }
    }
  }
  elseif (isset($_POST['del']) && ($_POST['del'] !== '' && $_POST['del'] !== ' ')) {
    del($_POST['del']);
  }
  resu();
  mysqli_close($GLOBALS['connect']);
?>
</main>
<script type="text/javascript" src="js.js"></script>
</body>
</html>
