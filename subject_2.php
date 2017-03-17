<?php
$a = 2;
$b = 3;

if ($a >= 0 && $b >= 0) {
    echo ($a + $b);
} elseif ($a < 0 && $b < 0) {
    echo ($a - $b);
} elseif (($a < 0 && $b >= 0) || ($a >= 0 && $b < 0)) {
    echo ($a * $b);
}
echo '<br>';
echo ($a > $b) ? $a : $b;
echo '<br>';

$c = 0;

switch ($c) {
    case 0:
        echo 0;
    case 1:
        echo 1;
    case 2:
        echo 2;
    case 3:
        echo 3;
    case 4:
        echo 4;
    case 5:
        echo 5;
    case 6:
        echo 6;
    case 7:
        echo 7;
    case 8:
        echo 8;
    case 9:
        echo 9;
}
echo '<br>';
function sum($n1, $n2)
{
    return $n1 + $n2;
}
echo sum(2, 4);
echo '<br>';

function dif($n1, $n2)
{
    return $n1 - $n2;
}
echo dif(2, 4);
echo '<br>';

function multiply($n1, $n2)
{
    return $n1 * $n2;
}
echo multiply(2, 4);
echo '<br>';

function division($n1, $n2)
{
    return $n1 / $n2;
}
echo division(2, 4);
echo '<br>';

$arg1 = 5;
$arg2 = 5;
$operation = '*';

function mathOperation($arg1, $arg2, $operation)
{
    switch ($operation) {
        case '+':
            return sum($arg1, $arg2);
            break;
        case '-':
            return dif($arg1, $arg2);
            break;
        case '*':
            return multiply($arg1, $arg2);
            break;
        case '/':
            return division($arg1, $arg2);
            break;
    }
}
echo $arg1, $operation, $arg2, '=', mathOperation($arg1, $arg2, $operation);
echo '<br>';

function power($val, $pow)
{
    if ($pow > 1) {
        return $val * power($val, --$pow);
    } elseif ($pow < 0) {
        $pow = mb_substr($pow, 1);
        return 1/($val * power($val, --$pow));
    } elseif ($pow === 1) {
        return $val;
    } else {
        return 'такое выражение не имеет смысла';
    }
}

echo power(0, 1);
echo '<br>';

$num1 = 100;
$num2 = 11;

function maximum($num1, $num2)
{
    return ($num1 > $num2) ? $num1 : $num2;
}

function minimum($num1, $num2)
{
    return ($num1 < $num2) ? $num1 : $num2;
}

if (($num1 * $num2) > 100 && ($num1 * $num2) < 1000) {
    echo (maximum($num1, $num2) - minimum($num1, $num2));
} elseif (($num1 * $num2) > 1000) {
    echo (maximum($num1, $num2) * minimum($num1, $num2))/maximum($num1, $num2);
}