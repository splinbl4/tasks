<?php

$output = '';
$number1 = $_POST['number1'];
$number2 = $_POST['number2'];
$operator = $_POST['operator'];
if (isset($_POST['submit'])) {
    $output = "$number1 $operator $number2 =";
    switch ($operator) {
        case '+' :
            $output .= $number1 + $number2;
            break;
        case '-' :
            $output .= $number1 - $number2;
            break;
        case '*' :
            $output .= $number1 * $number2;
            break;
        case '/' :
            if ($number2 == 0) {
                $output = 'Деление на ноль запрещено!';
            } else {
                $output .= $number1 / $number2;
            }
            break;
        default:
            $output = 'Неизвестный оператор "$operator"';
    }
}

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="" method="post">
    <input type="text" name="number1"/><br><br>
    <select name="operator">
        <option>+</option>
        <option>-</option>
        <option>*</option>
        <option>/</option>
    </select><br><br>
    <input type="text" name="number2"/><br><br>
    <input type="submit" name="submit" value="посчитать"/>
</form>
<?php
if ($output && is_numeric($number1) && is_numeric($number2)) {
    echo $output;
} else {
    echo 'Нужно ввести число!';
}
?>
</body>
</html>
