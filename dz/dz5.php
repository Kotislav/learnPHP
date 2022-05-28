<?php
$number = random_int(1000, 9999);
$result = array_sum(str_split($number));
echo "Сумма чисел числа $number = $result" , PHP_EOL;
//Чую запах Stack Overflow.
//
//А в цілому ви не дотримались умови задачі.
// Там сказано знайти суму цифр за допомогою арифметичних операцій. Використовуйте / та %


$number = random_int(1000, 9999);
$a = $number % 10;
$b = ($number / 10) % 10;
$c = ($number / 100) % 10;
$d = ($number / 1000) % 10;
echo PHP_EOL;
$varSum = $a + $b + $c + $d;
echo $number, PHP_EOL, $varSum;
