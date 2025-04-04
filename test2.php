<?php
//if-else
echo '<strong>IF-ELSE</strong><br>';
$a = 1;
$b = 3;
if ($a == 0) {
    echo 'Верно';
} else {
    echo 'Неверно';
}
echo '<br>';

if ($a > 0) {
    echo 'Верно';
} else {
    echo 'Неверно';
}
echo '<br>';

if ($a < 0 ) {
    echo 'Верно';
} else {
    echo 'Неверно';
}
echo '<br>';

if ($a <= 0) {
    echo 'Верно';
} else {
    echo 'Неверно';
}
echo '<br>';

if ($a != 0) {
    echo 'Верно';
} else {
    echo 'Неверно';
}
echo '<br>';

if ($a === 'test') {
    echo 'Верно';
} else {
    echo 'Неверно';
}
echo '<br>';

if ($a === '1') {
    echo 'Верно';
} else {
    echo 'Неверно';
}
echo '<br>';

//empty & isset
echo '<strong>EMPTY & ISSET</strong><br>';
if (empty($a)) {
    echo 'Верно';
} else {
    echo 'Неверно';
}
echo '<br>';

if (!empty($a)) {
    echo 'Верно';
} else {
    echo 'Неверно';
}
echo '<br>';

if (isset($a)) {
    echo 'Верно';
} else {
    echo 'Неверно';
}
echo '<br>';

if (!isset($a)) {
    echo 'Верно';
} else {
    echo 'Неверно';
}
echo '<br>';

//true, false
echo '<strong>TRUE, FALSE</strong><br>';

$var = true;
if ($var) {
    echo 'Верно';
} else {
    echo 'Неверно';
}
echo '<br>';

if ($var == true) {
    echo 'Верно';
} else {
    echo 'Неверно';
}
echo '<br>';

if (!$var) {
    echo 'Верно';
} else {
    echo 'Неверно';
}
echo '<br>';

if ($var != true) {
    echo 'Верно';
} else {
    echo 'Неверно';
}
echo '<br>';

//OR, AND
echo '<strong>OR, AND</strong><br>';

if ($a > 0 && $a < 5) {
    echo 'Верно';
} else {
    echo 'Неверно';
}
echo '<br>';

if ($a == 0 || $a == 2) {
    echo $a += 7;
} else {
    echo $a /= 10;
}
echo '<br>';

$a = 1;
$b = 3;
if ($a <= 1 && $b >= 3) {
    echo $a + $b;
} else {
    echo $a - $b;
}
echo '<br>';

$a = 3;
$b = 7;
if ($a > 2 && $a < 11 || $b >=6 && $b < 14) {
    echo 'Верно';
} else {
    echo 'Неверно';
}
echo '<br>';

//SWITCH-CASE
echo '<strong>SWITCH_CASE</strong><br>';
$num = 2;
switch ($num) {
    case 1:
        $result = 'зима';
        break;
    case 2:
        $result = 'весна';
        break;
    case 3:
        $result = 'лето';
        break;
    case 4:
        $result = 'осень';
        break;
}
echo $result;
echo '<br>';

//Задачи
echo '<strong>ЗАДАЧИ</strong><br>';
//1
$day = 26;
if ($day >= 1 && $day <= 10) {
    echo '1 decade';
} elseif ($day >= 11 && $day <= 20) {
    echo '2 decade';
} else {
    echo '3 decade';
}
echo '<br>';

//2
$month = 10;
if ($month == 12 || $month >=1 && $month <= 2) {
    echo 'winter';
} elseif ($month >=3 && $month <= 5) {
    echo 'spring';
} elseif ($month >= 6 && $month <= 8) {
    echo 'summer';
} elseif ($month >= 9 && $month <= 11) {
    echo 'fall';
}
echo '<br>';

//3
$year = 2020;
if ($year % 400 == 0 || $year % 4 == 0 && $year % 100 != 0) {
    echo 'Високосный';
} else {
    echo 'Не високосный';
}
echo '<br>';

//4
$chars = 'abcde';
$arr = str_split($chars);
if ($arr[0] = 'a') {
    echo 'Da';
} else {
    echo 'Net';
}
echo '<br>';

//5
$sumCifr = '135';
echo $sum = (int)$sumCifr[0] + (int)$sumCifr[1] + (int)$sumCifr[2];
echo '<br>';

//6
$str = '232313';
$firstHalf = (int)$str[0] + (int)$str[1] + (int)$str[2];
$secondHalf = (int)$str[3] + (int)$str[4] + (int)$str[5];
if ($firstHalf == $secondHalf) {
    echo 'Da';
} else {
    echo 'Net';
}
echo '<br>';

//FOREACH
echo '<strong>FOREACH</strong><br>';

$arr = ['html', 'css', 'js', 'php', 'jq'];
foreach ($arr as $item) {
    echo $item . '<br>';
}
unset($item);

$result = 0;
$nums = [1,2,3,4,5];
foreach ($nums as $num) {
    $result += $num;
}
unset($num);
echo $result;
echo '<br>';

$result = 0;
$nums = [1,2,3,4,5];
foreach ($nums as $num) {
    $result += ($num**2);
}
unset($num);
echo $result;
echo '<br>';

$arr = ['green'=>'зеленый', 'red'=>'красный','blue'=>'голубой'];
foreach ($arr as $k => $v) {
    print_r("$k - $v<br>");
}

$arr = ['Коля'=>'200', 'Вася'=>'300', 'Петя'=>'400'];
foreach ($arr as $k => $v) {
    print_r("$k - зарплата $v долларов.<br>");
}

//WHILE, FOR
echo '<strong>WHILE,FOR</strong><br>';
//while
$i = 0;
while ($i < 100) {
    $i++;
    echo $i . '<br>';
}
echo '<br>';

$i = 10;
while ($i < 33) {
    $i++;
    echo $i . '<br>';
}
echo '<br>';

$i = 0;
while ($i < 102) {
    if ($i % 2 == 0) {
        echo $i . '<br>';
    }
    $i++;
}
echo '<br>';

$i = 0;
$result = 0;
while ($i <= 100) {
    $result += $i;
    $i++;
}
echo $result . '<br>';

$i = 1;
while ($i <= 9) {
    echo (string)$i;
    $i++;
}
echo '<br>';

$i = 9;
while ($i >= 1) {
    echo (string)$i;
    $i--;
}
echo '<br>';

$i = 1;
while ($i < 10) {
    echo '-'.(string)$i;
    $i++;
} echo '-<br>';

$i = 1;
while ($i <= 20) {
    echo str_repeat('x', $i) . '<br>';
    $i++;
} echo '<br>';

$i = 1;
while ($i <= 5) {
    echo str_repeat('xx', $i) . '<br>';
    $i++;
} echo '<br>';

//for
for ($i = 1; $i <= 100; $i++) {
    echo $i . '<br>';
} echo '<br>';

for ($i = 11; $i <= 33; $i++) {
    echo $i . '<br>';
} echo '<br>';

for ($i = 0; $i <= 100; $i++) {
    if ($i % 2 == 0) {
        echo $i . '<br>';
    }
} echo '<br>';

$result = 0;
for ($i = 0; $i <= 100; $i++) {
    $result += $i;
}
echo $result . '<br>';

for ($i = 1; $i <= 9; $i++) {
    echo (string)$i;
} echo '<br>';

for ($i = 9; $i >= 1; $i--) {
    echo (string)$i;
} echo '<br>';

for ($i = 1; $i <= 9; $i++) {
    echo '-'.(string)$i;
} echo '-<br>';

for ($i = 1; $i <=20; $i++) {
    echo str_repeat('x', $i) . '<br>';
} echo '<br>';

for ($i = 1; $i <=5; $i++) {
    echo str_repeat('xx', $i) . '<br>';
}  echo '<br>';

?>