<!doctype html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <title>Test2</title>
  <style>
    form>*{
      margin-right: 5px;
    }
  </style>
</head>
<body>
  <?php
    print "<form action='' method='post' autocomplete='off'>";
    print "<input type='number' name='a' placeholder='первое число'>";
    print "<input type='number' name='b' placeholder='второе число'>";
    print "<select name='operations'>";
    print "<option value='addition'>Сложение</option>";
    print "<option value='subtraction'>Вычитание</option>";
    print "<option value='multiplication'>Умножение</option>";
    print "<option value='division'>Деление</option>";
    print "</select>";
    print "<input type='submit' value='Посчитать'>";
    print "</form></br>";
  
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