<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <style>
        table {
            border-collapse: collapse;
        }

        td {
            border: 1px solid black;
        }
    </style>
</head>


<?php
echo '------------------ Dz1.1 ---------------<br />';
$name = 'Ruslan';
$age = 44;

echo "Меня зовут: $name<br>";
echo "Мне $age лет<br>";
echo '“!|\/’”\ ' . '<br>';

echo '----------------------------------------<br>';

$drows = 80;
$flom_drows = 23;
$pencil_drows = 40;
$rez = $drows - $flom_drows - $pencil_drows;
echo "<br><br>";
echo '------------------ Dz1.2 ----------------------<br>';
echo "На школьной выставке $drows рисунков. $flom_drows из них выполнены фломастерами,<br> $pencil_drows карандашами, а остальные — красками.<br>
 Сколько рисунков, выполненные красками, на школьной выставке? <br>";
echo "Ответ: $rez";
echo '----------------------------------------<br>';

echo "<br><br>";
echo '------------------ Dz1.3 ----------------------<br>';
define('COOL_CONST', 'Константа кул');

if (defined("COOL_CONST")) {
    echo "Значение константы: " . COOL_CONST . "<br>";
}

//COOL_CONST = 'new';
echo 'если COOL_CONST = \'new\' то получим: ' . "<br>";
echo 'Parse error: syntax error, unexpected \'=\' in';
echo "<br><br>";
echo '------------------ Dz1.4 ----------------------<br>';

$age = -2;
if ($age >= 18 AND $age <= 65) {
    echo "Вам   еще работать   и   работать";
} elseif ($age > 65) {
    echo 'Вам   пора   на   пенсию';
} elseif ($age >= 1 AND $age <= 17) {
    echo "Вам   ещё   рано   работать";
} else {
    echo "Неизвестный   возраст";
}

echo "<br><br>";
echo '------------------ Dz1.6 ----------------------<br>';

$car = array(
    'model' => null,
    'speed' => null,
    'doors' => null,
    'year' => null,
);

$bmw = $car;
$bmw['model'] = 'X5';
$bmw['speed'] = 120;
$bmw['doors'] = 5;
$bmw['year'] = 2015;

var_dump($bmw);

$toyota = $car;
$toyota['model'] = 'RAV4';
$toyota['speed'] = 100;
$toyota['doors'] = 3;
$toyota['year'] = 2014;
var_dump($toyota);


$opel = $car;
$opel['model'] = 'Corsa';
$opel['speed'] = 90;
$opel['doors'] = 5;
$opel['year'] = 2016;
var_dump($opel);

$cars['bmw'] = $bmw;
$cars['toyota'] = $toyota;
$cars['opel'] = $opel;
?>

<pre>
    <?php var_dump($cars); ?>
</pre>

<?php
foreach ($cars as $key => $val) {
    echo "CAR $key <br>";
    echo $val['model'] . ' - ' . $val['speed'] . ' - ' . $val['doors'] . ' - ' . $val['year'] . '<br>';
}
echo "<br><br>";
echo "<br><br>";
echo '------------------ Dz1.7 ----------------------<br>';

?>
<table style="border: 1px solid black;">
    <?php
    for ($i = 1; $i < 11; $i++) {
        echo "<tr>";
        for ($j = 1; $j < 11; $j++) {
            $k = $j * $i;
            if (!($i % 2) AND !($j % 2)) {
                echo "<td>( $k )</td>";
            } elseif ($i % 2 AND $j % 2) {
                echo "<td>[ $k ]</td>";
            } else {
                echo "<td> $k </td>";

            }

        }
        echo "</tr>";
    }
    ?>
</table>


<?php
echo "<br><br>";
echo '------------------ Dz1.8 ----------------------<br>';
$str = "Hello world Hello world Hello world Hello world";
$words = explode(' ', $str);
//print_r($words);
echo $str . '<br>';
$count = count($words);
$x = $count-1;
while ($x > 0) {
    if ($x != 1) {
        echo "X: ". $x .'<br>';
        $new_str .= $words[$x] . '+';
    } else {
        $new_str .= $words[$x];
    }
    $x--;
}
echo '<br>';
echo $new_str;




