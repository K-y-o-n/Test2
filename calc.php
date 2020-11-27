<!doctype html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <title>Test2</title>
</head>
<body>
  <form action="" method="post">
    <input type="number" name="a" placeholder="первое число">
    <input type="number" name="b" placeholder="второе число">
    <select name="operations" >
      <option value="addition">Сложение</option>
      <option value="subtraction">Вычитание</option>
      <option value="multiplication">Умножение</option>
      <option value="division">Деление</option>
    </select>
    <input type="submit" value="Посчитать">
  </form></br>
  <?php
    $a=$_POST["a"];
    $b=$_POST["b"];
    $operations=$_POST["operations"];
    switch($operations){
      case "addition":
        $result=$a+$b;
        print "<span>Результат: ".$result."</span>";
        break;
      case "subtraction":
        $result=$a-$b;
        print "<span>Результат: ".$result."</span>";
        break;
      case "multiplication":
        $result=$a*$b;
        print "<span>Результат: ".$result."</span>";
        break;
      case "division":
        $result=$a/$b;
        print "<span>Результат: ".$result."</span>";
        break;
    }
  ?>
</body>
</html>