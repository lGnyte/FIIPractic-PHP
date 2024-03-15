<pre style="font-size:18px">
<?php

echo "Ex1\nWrite a program that performs all
arithmetic operations with 3 variables.\n\n";
$a = 10;
$b = 5;
$c = 2;

$add = $a + $b + $c;
echo "$a + $b + $c = $add\n";

$sub = $a - $b - $c;
echo "$a - $b - $c = $sub\n";

$mul = $a * $b * $c;
echo "$a * $b * $c = $mul\n";

$div = $a / $b / $c;
echo "$a / $b / $c = $div\n";

$mod = $a % $b % $c;
echo "$a % $b % $c = $mod\n";
echo "($a + $c) % $b = " . ($a + $c) % $b . "\n";

$exp = $a ** $b ** $c;
echo "$a ** $b ** $c = $exp\n";
echo "$c ** $a = " . $c ** $a . "\n";

echo "\n\nEx2\nGet the month with date(“F”) function and
if its December and day date(“d”) is
greater than 20 and less than 26, print
“Craciun Fericit”.\n\n";

$month = date("F");
$day = date("d");
if($month == "December" && $day > 20 && $day < 26) {
    echo "Craciun Fericit\n";
} else {
  echo "Not yet Craciun Fericit. It's ".$month." ".$day."\n";
}

echo"\n\nEx3\nPrint multiplication table of 5 with for loop.\n\n";

for($i = 1; $i <= 10; $i++) {
    echo "5 * $i = " . 5 * $i . "\n";
}

echo "\n\nEx4\nUse foreach loop for an array called names
and print the names in the array with its keys.\n\n";

$names = array("Vasile", "Gheorghe", "Mihai", "Dorel");
echo "Names array:\n".print_r($names, true)."\n";
echo "Names with keys:\n";
foreach($names as $key => $value) {
    echo "key: $key, nume: $value\n";
}