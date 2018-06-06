<?php
/**
 * Created by PhpStorm.
 * User: Student
 * Date: 06.06.2018
 * Time: 19:10
 */
error_reporting(E_ALL);
ini_set('display_errors', 1);
header('Content-Type: text/html; charset=utf-8');


$a = intval('-1');
if ($a > 0) {
    echo '$a ? 0, $a = ' . $a;
} else {
    echo '$a != 0';
}


if ($a > -3 && $a < 1) { // $a = -1, то true
    echo '<div>Ура ' . __LINE__ . '!</div>';
}

if ($a > -3 || $a < -1) { // true
    echo '<div>Ура ' . __LINE__ . '!</div>';
}

/*
1 = true
0 = false


(1 + 0 )* 0 = 1


*/

if (($a > -3 || $a < -1) && $a != -1) { // false
    echo '<div>Ура ' . __LINE__ . '!</div>';
}

$a = 1;
if ($a == 0) {
    echo '<div>a = 0</div>';
} else if ($a == 1) {
    echo '<div>a = 1</div>';
} else if ($a == 2) {
    echo '<div>a = 1</div>';
} else if ($a == 3) {
    echo '<div>a = 1</div>';
} else if ($a == 4) {
    echo '<div>a = 1</div>';
} else if ($a == 1) {
    echo '<div>a = 1</div>';
} else {
    echo '<div>a = ?</div>';
}

//$b = 7;
$b = !isset($b) ? 0 : $b;
echo '<div>b = ' . (3 + $b) . '</div>';

/*
Если А меньше ноля И больше -3, то УРА, иначе НЕ УРА
*/
$a = 2;
$ura = ($a > -3 && $a < 0) ? 'Ура' : 'Не ура';
echo $ura;

switch ($a) {
    case 1:
        echo '<div>a = ' . $a . ' ' . __LINE__ . '!</div>';
        break;
    case 2:
    case 3:
        echo '<div>a = ' . $a . '!!! ' . __LINE__ . '!</div>';
        break;
    //default: echo  '<div>a = ? ' . __LINE__ . '!</div>';
}

for ($i = 0; $i < 10; $i++) {
    echo '<div>i = ' . $i . '</div>';
}

echo '<hr>';
$n = 0;
while ($n < 10) {
    echo '<div>n = ' . $n . '</div>';
    $n++;
}
echo '<hr>';
$m = 0;
do {
    echo '<div>m = ' . $m . '</div>';
    $m++;
} while ($m < 10);


$massiv = array(3, 5, 7, 'dfg', true, 0, 'false');

for ($i = 0; $i < sizeof($massiv); $i++) {
    echo '<div>$massiv[' . $i . '] = ' . $massiv[$i] . '</div>';
}

$massiv = array(
    'age' => 98,
    'first_name' => 'Федот',
    'last_name' => 'Гдыщев',
    'job' => 'опытный программист',
);

echo '<hr>';
foreach ($massiv as $item) {
    echo '<div>' . $item . '</div>';
}
echo '<hr>';
foreach ($massiv as $key => $value) {
    echo '<div>' . $key . ' - ' . $value . '</div>';
}

echo '<div>' . $massiv['last_name'] . '</div>';

$number = 2;
$result = 1;
for ($i = 0; $i < 3; $i++) {
    $result = $result * $number;
}
echo '<div>$result = ' . $result . '</div>';

$count = 0;
do {
    echo '.';
    $count++;
} while ($count < 10);


/*
 * Пусть выводятся символы - до тех пор, пока их количество не станет равным
 * половине всех символов, которые необходимо вывести, а далее пусть
 * выводятся символы +
 * Последний символ должен быть !
 * Количество всех символов должно быть четным.
 * Если, кол-во символов не четное, необходимо
 * вывести информацию об этом и не выводить символы.
 *
 */
$symbols = 16;
if($symbols % 2 == 0) {
    for ($i = 0; $i < $symbols; $i++) {
        if ($i < $symbols / 2) {
            echo '-';
        } elseif ($i < $symbols - 1) {
            echo '+';
        } else {
            echo '!';
        }
    }
}else{
    echo 'ne chetnoe';
}

/*
 * Если переменная равна Y, вывести "Привет, Игорь!"
 * Если переменная равно N, вывести "Пока!"
 * Нельзя использовать if
 */

$peremennaya = ($_GET['peremennaya']);
switch ($peremennaya){
    case 'y'||'Y':echo 'Привет, Игорь!';break;
    case 'n':echo 'Пока!';break;
}