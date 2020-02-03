<!DOCTYPE html>
<html>
<head>
	<title>Second Level</title>
	<meta charset="utf-8">
</head>
<body>
<div id="firstLevel">
	<h1>Первый уровень: </h1>

	<form method="post">
	   <input type="text" name="name" placeholder="Ваше имя..."><br>
	   <p>Ваша погода за окном: </p>
       <input type="radio" name="weather" value="Ясно"><label for="Ясно"> Ясно</label><br>
       <input type="radio" name="weather" value="Холодно"><label for="Холодно"> Холодно</label><br>
       <input type="radio" name="weather" value="Облачно"><label for="Облачно"> Облачно</label><br>
       <input type="radio" name="weather" value="Дождь"><label for="Дождь"> Дождь</label><br>
       <input type="radio" name="weather" value="Снег"><label for="Снег"> Снег</label><br>
       <input type="radio" name="weather" value="Не знаю"><label for="Не знаю"> Не знаю</label><br>
       <input type="submit" name="sub" value="Окей">
	</form>
</div><br>

<?php

//Первый уровень:
//Пример if-elseif-else:

if (!empty($_POST)) {
 //Пример тернарного оператора:
 $name = ($_POST['name'] !== '' && $_POST['name'] !== ' ') ? $_POST['name'] : '';

 if ($name) {

      foreach ($_POST as $key => $value) {
         if ($key === 'weather') {

  	         if ($value === 'Ясно') {
  	              echo "$name Можете спокойно выходить на улицу!";
   	         }
  	         elseif ($value === 'Холодно') {
  	              echo "$name Там холодно, лучше дома поучить PHP!";
   	         }
  	         elseif ($value === 'Облачно') {
  	              echo "$name Возможен дождь, не забудь взять зонтик!";
   	         }
  	         elseif ($value === 'Дождь') {
  	              echo "$name На улице дождь, какая улица?!";
   	         }
  	         elseif ($value === 'Снег') {
  	              echo "$name Одевайся теплее, там снег!";
   	         }
   	         else{
   	    	     continue;
   	         }
//Вариант переписаный под switch:

  //  	    switch ($value) {
  //  	 	    case 'Ясно':
  //  	 		    echo "$name Можете спокойно выходить на улицу!";
  //  	 		    break;
  //  	 	    case 'Холодно':
  //  	 		    echo "$name Там холодно, лучше дома поучить PHP!";
  //  	 		    break;
  //  	 	    case 'Облачно':
  // 	            echo "$name Возможен дождь, не забудь взять зонтик!";
  //  	 		    break;
  //  	 	    case 'Дождь':
  // 	            echo "$name На улице дождь, какая улица?!";
  //  	 	     	break;
  //  	 	    case 'Снег':
  // 	            echo "$name Одевайся теплее, там снег!";
  //  	 	    	break;
  //  	 	    default:
  //  	 	        continue;
  //  	 		    break;
  //  	      }
   	        }
            else if ($key !== 'weather'){
                 continue;
            }
        }
    }
    else{
  	  echo "Введите ваше имя!";
    }

}
?>

</body>
</html>
