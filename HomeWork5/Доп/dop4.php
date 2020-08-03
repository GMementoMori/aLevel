<!DOCTYPE html>
<html>
<head>
	<title>Сокращение имени</title>
	<meta http-equiv="Content-Type" content="text/html" charset=utf-8 />
</head>
<body>
<form method="post">
	<input type="text" name="surname" placeholder="Введите свою фамилию"><br>
	<input type="text" name="name" placeholder="Введите свое имя"><br>
	<input type="text" name="otche" placeholder="Введите свое отчество"><br>
    <input type="submit" name="sub" value="OK"><br><br>
</form>
<?php
function inci(){
  $inc = [];
  foreach ($_POST as $key => $value) {
	 if ($key !== 'sub') {
		if ($key === 'surname') {
			$arr = preg_split('//u', $value, null, PREG_SPLIT_NO_EMPTY);
			$up = mb_strtoupper($arr[0]);
			$arr[0] = $up;
			$text = implode($arr);
			$inc[$key] = $text;
		}
		elseif ($key === 'name') {
			$up = mb_strtoupper($value);
			$arr = preg_split('//u', $up, null, PREG_SPLIT_NO_EMPTY);
			$inc[$key] = $arr[0];
		}
		elseif ($key === 'otche') {
			$up = mb_strtoupper($value);
			$arr = preg_split('//u', $up, null, PREG_SPLIT_NO_EMPTY);
			$inc[$key] = $arr[0];
		}		
	  }
    }
    return $inc;
}

if(!empty($_POST) && ($_POST !== '' && $_POST !== ' ')){
  inci();
  $result = inci();
  echo "Ваши инициалы: ".$result["surname"]." ".$result["name"].".".$result["otche"];
}else{
  echo "Заполните все поля!";
}

?>
</body>
</html>

