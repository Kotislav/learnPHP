<?php

$year = random_int(0, 9999);;
echo $year;
if ($year % 400 === 0) {
    echo 'leap year';
} elseif (($year % 100 !== 0) && ($year % 4 === 0)) {
    echo ' leap year';
} else {
    echo ' default year';
}


