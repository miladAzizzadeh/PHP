<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>testPhp</title>
</head>
<body>
<?php
require_once("class.php");
global $a;
echo $a;
echo Car::$capacity;
echo "<br>";
Car::getCapacity();
echo "<br>";
$car = new Car();
$car->getColor();
echo "<br>";
$car->color = "blue";
$car->getColor();
echo "<br>";
function sum($num1, $num2, $num3 = 0, $num4 = 0, $num5 = 0)
{
    return $num1 + $num2 + $num3 + $num4 + $num5;
}

function concat($str1, $str2, $str3 = "", $str4 = "")
{
    $output = $str1 . " " . $str2;
    if (strlen($str3) > 0) {
        $output .= " " . $str3;
    }
    if (strlen($str4) > 0) {
        $output .= " " . $str4;
    }
    return $output;
}

function division($number)
{
    for ($i = 1; $i <= $number; $i++) {
        if ($number % $i == 0) {
            echo $i . "<br>";
        }
    }
}

function new_division($number)
{
    $output = array();
    for ($i = 1; $i <= $number; $i++) {
        if ($number % $i == 0) {
            $output[] = $i;
        }
    }
    return $output;
}

function is_what($var, $result = false)
{
    if (is_array($var)) {
        $out = print_r($var, true);
    } else if (is_object($var)) {
        $out = var_export($var, true);
    } else {
        $out = $var;
    }

    if ($result) {
        return "<pre>$out</pre>";
    } else {
        echo "<pre>$out</pre>";
    }
}

function compute($num1, $num2)
{
    $sum = $num1 + $num2;
    $minus = $num1 - $num2;
    $multiply = $num1 * $num2;
    $remain = $num1 % $num2;
    return array($sum, $minus, $multiply, $remain);
}

?>
<?php
list($plus, $minus, $multiply, $remain) = compute(10, 8);
echo $remain;
/*$computes = compute(14, 5);
echo $computes[3];*/
//echo compute(10, 3);
$number = array(3, 4, 7, 1);
//echo is_what($number, true);
//division(100);
var_dump(new_division(100));
?>
<?php
$a = 4;
$c = sum($a, 5, 5, 2, 8, 3);
echo "C: " . $c;
?>
<hr>
<?php
$c = 4;
echo $c;
?>
<hr>
<?php
echo $a + $c;
?>
<hr>
<?php
$salam = "hello";
$world = "world";
echo concat($salam, $world, "my", "name");
?>
<hr>
<?php
echo $a . $b;
?>
<hr>
<?php
$d = "4";
$e = "6";
echo $d + $e;
?>
<hr>
<?php
if ($d < $e) {
    echo "$d&lt;$e";
} else {
    echo "$d&gt;$e";
}
?>
<hr>
<?php
$number = 1;
while ($number < 12) {
    echo $number . "<br>";
    $number = $number * 2;
}
?>
<hr>
<?php
for ($i = 5; $i < 10; $i++) {
    echo $i . "<br>";
}
?>
<hr>
<?php
for ($c = 1; $c < 10; $c = $c + 2) {
    echo $c . "<br>";
}
?>
<hr>
<?php
for ($i = 1; $i <= 12; $i++) {
    if (12 % $i == 0) {
        echo $i . "<br>";
    }
}
?>
<hr>
<?php
$strings['milad'] = "hello 1";
$strings['donya'] = "hello 2";
$strings[] = "hello 3";
$strings[] = "hello 4";
$strings['negarin'] = "hello 5";
$strings[] = "hello 6";
/*
//echo "<pre>";
print_r($strings);
//echo "</pre>";
*/
//var_dump($strings);
//unset($strings[1]);
//unset($strings['negarin']);
$dvd[] = "football";
$dvd[] = "Need for speed";
$strings[1] = $dvd;
var_dump($strings);
/*
foreach($strings as $key=>$value){
    echo $key." say ".$value;
    echo "<br/>";
}
*/
?>
</body>
</html>
