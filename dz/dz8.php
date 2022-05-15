<?php

$year = random_int(0, 9999);;
echo $year;
$result = '';
if ($year % 400 === 0) {
    $result= ' leap year';
} elseif (($year % 100 !== 0) && ($year % 4 === 0)) {
    $result=' leap year';
} else {
    $result= ' default year';
}
echo $result;


