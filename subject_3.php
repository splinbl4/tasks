<?php
$i = 0;
while ($i <= 100) {
    if (($i % 3) === 0) {
        echo $i . ',';
    }
    $i++;
}
echo '<br>';

$j = 0;
do {
    if ($j == 0) {
        echo $j . ' – это ноль<br>';
    } elseif (($j % 2) == 0) {
        echo $j . ' – четное число<br>';
    } else {
        echo $j . ' – нечетное число<br>';
    }
    $j++;
} while ($j <= 10);

for ($i = 0; $i < 10; print $i++);
echo '<br>';

$arr = ['Московская область' => ['Москва', 'Зеленоград', 'Клин'],
        'Ленинградская область' => ['Санкт-Санкт-Петербург', 'Всеволожск', 'Павловск', 'Кронштадт'],
        'Рязанская область' => ['Рязань', 'Касимов', 'Кораблино'],
];

foreach ($arr as $k => $item) {
    echo $k . ':<br>';
    echo implode(', ', $item);
    echo '<br>';
}
echo '<br>';

foreach ($arr as $k => $item) {
    echo $k . ':<br>';
    echo strstr(implode(', ', $item), 'К');
    echo '<br>';
}
echo '<br>';

function transliterate($str)
{
    $array = ['а' => 'a',   'б' => 'b',   'в' => 'v',
        'г' => 'g',   'д' => 'd',   'е' => 'e',
        'ё' => 'e',   'ж' => 'zh',  'з' => 'z',
        'и' => 'i',   'й' => 'y',   'к' => 'k',
        'л' => 'l',   'м' => 'm',   'н' => 'n',
        'о' => 'o',   'п' => 'p',   'р' => 'r',
        'с' => 's',   'т' => 't',   'у' => 'u',
        'ф' => 'f',   'х' => 'h',   'ц' => 'c',
        'ч' => 'ch',  'ш' => 'sh',  'щ' => 'sch',
        'ь' => '\'',  'ы' => 'y',   'ъ' => '\'',
        'э' => 'e',   'ю' => 'yu',  'я' => 'ya'];
    $str = mb_strtolower($str);
    return strtr($str, $array);
}

function replace($str)
{
    return str_replace(' ', '_', $str);
}

function get_transliterate($str)
{
    return replace(transliterate($str));
}
