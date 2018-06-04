<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

header('Content-Type: text/html; charset=utf-8');

// hello world

$x = 2; // integer
$pi = 3.1415; // float

echo '<b>Hello</b>, world!{$x}' . $x . "dsfds";
print "<div>" .
    "<b>Hello</b>, world!{$x}yz???</div>";

/*
echo <<<END
<p>dsfgsgs</p>
dsgdfsgsdfg
hdgfhdgfhdfgh
END;

*/

$y = 1; // integer
$y = $x + $pi; // float

$y = $y + '2 строка'; // float
$y = $y . ' строка'; // string
//$y += 0; // float
$y = $y * 1;


echo "Text 1", $y, " text2";

$name = 'chislo';
$chislo = 5;

define('KONSTANTA', 7);
//define(KONSTANTA, 8); - переопределять константу нельзя
?>
    <div><?= $x ?> - так писать не следует!
    </div>
    <div>Значение числа Пи равно <?php echo $pi; ?></div>
    <div>y = <?php echo $y; ?></div>
    <div><?php echo $name; ?> = <?php echo $$name; ?></div>
    <div><?php echo $name; ?> = <?php echo "${$name} еще какие-то слова"; ?></div>
    <div><?php echo KONSTANTA; ?></div>

    <ul>
        <li><?php echo __LINE__; ?> - номер строки</li>
        <li><?php echo __FILE__; ?> - путь к текущему файлу</li>
        <li><?php echo __FUNCTION__; ?> - название текущей функции</li>
        <li><?php echo __CLASS__; ?> - название текущего класса</li>
        <li><?php echo __METHOD__; ?> - метод текущего класса</li>
        <li><?php echo PHP_VERSION; ?> - версия PHP</li>
        <li><?php echo PHP_OS; ?> - ос на которой запущен сервер</li>
        <li><?php echo DEFAULT_INCLUDE_PATH; ?> - список путей с подключаемыми файлами</li>
    </ul>

<?php

// Boolean
$flag_1 = true;
$flag_2 = false;

$x = $flag_1 * $flag_2;

echo $x;


$massiv = array(2, 5, 7, 'dfg', true);

echo '<pre>';
print_r($massiv);
echo '</pre>';
echo $massiv[0] + $massiv[2];

// resource


// NULL

$z = (integer)'45';

echo "<div>$z</div>";
$a = 0;
$a = $a + 1; // аналогично $a += 1;
$a += 1;
echo "<div>".(++$a)."</div>";
echo "<div>".($a++)."</div>";
echo "<div>".($a)."</div>";


// LAMP = Linux Apache MySQL PHP