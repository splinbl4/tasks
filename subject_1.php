<?php
$string = 'string';
$int = 30;
$float = 1.2;
define('PI', 3.14);
$a = 0123;
$b = 0x1A;
echo $string . '<br>';
echo $int . '<br>';
echo $float . '<br>';
echo PI . '<br>';
echo $a . '<br>';
echo $b . '<br>';

echo '$string ';
echo '$int ';
echo '$float ';
echo 'PI ';
echo '$a ';
echo '$b' . '<br>';

echo "$string ";
echo "$int ";
echo "$float ";
echo "PI ";
echo "$a ";
echo "$b ";
echo '<br>';

echo 010 . ',';
echo 011 . ',';
echo 012 . ',';
echo 013 . ',';
echo 014 . ',';
echo 015 . ',';
echo 016 . ',';
echo 017 . ',';
echo 018 . ',';
echo 019 . ',';
echo 020 . ',';
echo '<br>';

echo 0x0 . ',';
echo 0x1 . ',';
echo 0x2 . ',';
echo 0x3 . ',';
echo 0x4 . ',';
echo 0x5 . ',';
echo 0x6 . ',';
echo 0x7 . ',';
echo 0x8 . ',';
echo 0x9 . ',';
echo 0xa . ',';
echo 0xb . ',';
echo 0xc . ',';
echo 0xd . ',';
echo 0xf . ',';
echo '<br>';

$c1 = '"Я помню чудное мгновенье:';
$c2 = 'Передо мной явилась ты,';
$c3 = 'Как мимолетное виденье,';
$c4 = 'Как гений чистой красоты."';
$c5 = 'А.С. Пушкин';

echo $c1 . '<br>';
echo $c2 . '<br>';
echo $c3 . '<br>';
echo $c4 . '<br>';
echo '<i>' . $c5 . '</i><br>';

echo $c1 . '<br>' . $c2 . '<br>' . $c3 . '<br>' . $c4 . '<br>' . '<i>' . $c5 . '</i><br>';

$result = $string + $int;
echo $result;
echo '<br>';
//Значение определяется по начальной части строки.
// Если строка начинается с верного числового значения, будет использовано это значение.
// Иначе значением будет 0 (ноль).

$a1 = false;
$a2 = false;
var_dump($a1 xor $a2);
$a1 = true;
$a2 = false;
var_dump($a1 xor $a2);
$a1 = false;
$a2 = true;
var_dump($a1 xor $a2);
$a1 = true;
$a2 = true;
var_dump($a1 xor $a2);
var_dump($a1 xor $a1);