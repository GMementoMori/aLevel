<?php //нужна база данных usedcities со столбцами id,city,used. По дефолту used = No,а city заполняеться скриптом!
$GLOBALS['connect'] = mysqli_connect('127.0.0.1', 'root', '', 'test');
?>           
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8"/>
  <meta name="viewport" content="width = device-width, user-scalable=no,
      initial-scale = 1.0, maximum-scale = 1.0, minimum-scale = 0.5">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
   
  <title>Игра в города...</title>
  <script type="text/javascript" src="jQuery.js"></script>
  <link href="city.css" rel="stylesheet" type="text/css"/>
  <link href="https://fonts.googleapis.com/css?family=Lobster&display=swap" rel="stylesheet"> 
  <link href="https://fonts.googleapis.com/css?family=Marck+Script&display=swap" rel="stylesheet"> 
</head>
<body>
  <span></span>
<div id="main">
<form>
	<input type="text" id='city' name="city" placeholder="Введите город">
  <input type="button" id='sub' name="sub" value="OK">
  <input type="button" id='reset' name="reset" value="Обновить игру">
</form><br><br>

<?php  

$speach = ['Хм.. сложно', 
           'Ладно, попробую этот город', 
           'А, ТЫ УВЕРЕН ЧТО НЕ ПОВТОРЯЕШЬСЯ?!',
           'Очень легко;)', 
           'Может пора сдаться?', 
           'И даже такой город есть','Я чувствую победу..)',
           'Что на это скажешь?',
           'Угу.. ты не плох!',
           'Почему так легко...',
           'Да, ты достойный соперник!',
           'Тебе бы свой город знать..',
           'Хороший выбор, но у меня лучще',
           'Честно,я не знал что такой город есть'
          ];
$var = rand(0, 11);
$GLOBALS['speek'] = $speach[$var];

function dele(){
  mysqli_query($GLOBALS['connect'], "UPDATE usedcities SET used = 'No' WHERE used = 'Yes'");
  mysqli_query($GLOBALS['connect'], "DELETE FROM `usersUsedCities` WHERE `city` != ''");
}
function resu($f){
     $fWord = '';
     $select = mysqli_query($GLOBALS['connect'], "SELECT * FROM `usedcities`");
     while ($r = mysqli_fetch_array($select)) {
       $city = $r['city'];
       $str = mb_strtolower($city);
       $result = preg_split('//u', $str, null, PREG_SPLIT_NO_EMPTY);
       if (@$result[1] == $f && $r['used'] === 'No') {
          mysqli_query($GLOBALS['connect'], "UPDATE usedcities SET used = 'Yes' WHERE city = '$city'");
          echo "<p id='cityEnem'> Город противника: " . $city . "</p>";
          echo "<p id='commit'>Коментарий противника: "."'".$GLOBALS['speek']."'". "</p>";
          break;
       }
     }
}
 
function cities($p){
  $usedOrNo = '';
  $stringLow = mb_strtolower($p);
  $select = mysqli_query($GLOBALS['connect'], "SELECT * FROM `usersUsedCities`");
  while ($r = mysqli_fetch_array($select)) {
     if ($r['city'] === $stringLow) {
        $usedOrNo = 'yes';
        break;
     }else{
        $usedOrNo = 'no';
     }
  }
  if ($usedOrNo === 'yes') {
       echo "Вы использовали этот город! <br>";
       echo "Не повторяйтесь! <br>";
  }else{
      $lWord = '';
      $str = mb_strtolower($p);
      mysqli_query($GLOBALS['connect'], "INSERT INTO `usersUsedCities` (`city`) VALUES ('$str')");
      $userTown = preg_split('//u', $str, null, PREG_SPLIT_NO_EMPTY); //город введенный пользователем
      for ($i=0; $i < count($userTown); $i++) { 
          if ($userTown[$i] == 'ь' || $userTown[$i] == 'ы' || $userTown[$i] == 'ъ') {
             $lWord = $userTown[$i-1];
          }else{
             $lWord = $userTown[$i];
          }
      }
      echo "<p id='myCity'>Ваш город: $p </p>";
      resu($lWord);
  }
}

$maxChanse = 15;
$pass = rand(0, $maxChanse);
if (!empty($_POST['city']) && ($_POST['city'] !== '' && $_POST['city'] !== ' ') && $pass !== $maxChanse) {
  cities($_POST['city']);
}
elseif(isset($_POST['reset']) && $_POST['reset'] === 'yes'){
  dele();
}
elseif($pass === $maxChanse){
  echo "<p>Я не помню городов на эту букву! :( </p>";
  echo "<p>Ты выиграл :( </p>";
  dele();
}
else{
  echo "Введите ваш город...";
}
mysqli_close($GLOBALS['connect']);
?>
</div>
<script type="text/javascript" src="js.js"></script>
</body>
</html>