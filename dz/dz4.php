<?php
$a = 10;
$b = 40;

echo '$a = ' . $a . PHP_EOL;
echo '$b = ' . $b . PHP_EOL;

list($a,$b)=[$b,$a];

echo '$a = ' . $a . PHP_EOL;
echo '$b = ' . $b . PHP_EOL;