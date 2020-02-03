<!DOCTYPE html>
<html>
<head>
  <title>Оптимизация циклов</title>
</head>
<body>
<h2 style="color: grey;">//Введите мин и макс число, для генирации рандомных чисел в масив: </h2>
<h5 style="color: grey;">//В масив будут помещенны 100 значений</h5>
<form method="post">
  <input type="number" name="min" placeholder="Минимальный номер"><br>
  <input type="number" name="max" placeholder="Максимальный номер"><br>
  <input type="submit" name="sub" value="OK"><br><br>
</form>
<?php
function res($v){
  $newArr = [];
  $c = count($v) / 2;
  $x = $c;
  for ($i=0; $i < $c; $i++) { 

      if ($v[$i] > $v[$x]) {
       $newArr[] = $v[$i];
      }else{
       $newArr[] = $v[$x];
      }
        $x++;
    }
    if ($c !== 2) {
      res($newArr);
    }else{
      if ($newArr[0] >= $newArr[1]) {
        echo "<br> Самое большое число в масиве : " . $newArr[0];
      }else{
        echo "<br> Самое большое число в масиве : " . $newArr[1];
      }
      
    }

}
if((!empty($_POST['min']) && !empty($_POST['max'])) && ($_POST['min'] !== '' && $_POST['max'] !== '')){
for ($i=0; $i <= 100; $i++) { 
  $mainArr[$i] = rand($_POST['min'],$_POST['max']);
}
res($mainArr);
}else{
  echo "Заполните все поля!";
}
?>
</body>
</html>
