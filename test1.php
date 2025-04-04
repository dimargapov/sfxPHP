<?php

//Агапов Дмитрий Сергеевич
/* 3 Апреля
   2025 год */

echo "Hello World!<br>";

$tvChannel = "renTV";
$address = "Tula, Moskovskaya 19";
$color = "red";
$temp = 24;
$phoneModel = "S23 Ultra";

$first = 3;
$second = 5;
$third = 8;

echo "$first, $second, $third<br>";

$a = 10;
$b = 2;
echo $a + $b . "<br>";
echo $a * $b . "<br>";
echo $a / $b . "<br>";
echo $a - $b . "<br>";

$c = 15;
$d = 2;
$result = $c + $d;
echo "$result<br>";

$a = 17;
$b = 10;
$c = $a - $b;
$d = 7;
$result = $c + $d;
echo "$result<br>";

$result = 2+6+2/5-1;
echo "$result<br>";

$text = "Привет, Мир!";
$name = "Дмитрий";
echo "Привет, $name!<br>";
$age = 20;
echo "Мне $age лет!<br>";

$a = 10;
$b = 5;
echo "$b из $a студентов посетили лекцию<br>";
echo $b . ' из ' . $a . ' студентов посетили лекцию<br>';

$text = "abcde";
echo "$text[0] <br>";
echo "$text[2] <br>";
echo "$text[4] <br>";

$string = "abcde";
$string[0] = '!';
echo "$string<br>";
$num = "12345";
$sum = array_sum(str_split($num));
echo "$sum<br>";

$var = 47;
$var += 7;
$var -= 18;
$var *= 10;
$var /= 20;
echo $var.'<br>';


$text = 'Я';
$text .= ' хочу';
$text .= ' знать';
$text .= ' PHP!';
echo $text.'<br>';

const FIRST = 41;
const SECOND = 33;

echo FIRST + SECOND.'<br>';

$arr = ['a', 'b', 'c'];
var_dump($arr);
echo "<br>";
var_dump($arr[0]);
echo "<br>";
var_dump($arr[1]);
echo "<br>";
var_dump($arr[2]);
echo "<br>";

$arr=['a', 'b', 'c', 'd'];
echo "$arr[0]+$arr[1], $arr[2]+$arr[3] <br>";
$arr[0] = 1;
$arr[1] = 2;
$arr[2] = 3;
$arr[3] = 4;
$arr[4] = 5;
var_dump($arr);
echo "<br>";

$arr = ['a'=>1, 'b'=>2, 'c'=>3];
var_dump($arr['c']);
echo "<br>";
var_dump($arr['a']+$arr['b']+$arr['c']);
echo "<br>";

$week = ['1'=>'Понедельник', '2'=>'Вторник', '3'=>'Среда', '4'=>'Четверг', '5'=>'Пятница', '6'=>'Суббота', '7'=>'Воскресенье'];
var_dump($week['5']);
echo "<br>";

$day = 3;
var_dump($week[(string)$day]);
echo "<br>";

$arr = [
    'cms'=>['joomla', 'wordpress', 'drupal'],
    'colors'=>['blue'=>'голубой', 'red'=>'красный', 'green'=>'зеленый']
];

var_dump($arr['cms'][0]);
echo "<br>";
var_dump($arr['cms'][2]);
echo "<br>";
var_dump($arr['colors']['green']);
echo "<br>";
var_dump($arr['colors']['red']);
echo "<br>";

$week2 = [
    'ru'=>['Понедельник', 'Вторник', 'Среда', 'Четверг', 'Пятница', 'Суббота', 'Воскресенье'],
    'en'=>['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday']
];

var_dump($week2['ru'][0]);
echo "<br>";
var_dump($week2['en'][2]);
echo "<br>";

$lang = 'ru';
$day = 4;

var_dump($week2[$lang][$day]);