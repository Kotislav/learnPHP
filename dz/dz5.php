<?php
$number = random_int(1000, 9999);
$result = array_sum(str_split($number));
echo "Сумма чисел числа $number = $result" , PHP_EOL;
