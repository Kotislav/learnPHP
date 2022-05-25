<?php
$year = random_int(1850, 2022);
$monthNumbers=random_int( 1,12);
$day = random_int(1, 30);
$yearNow = "year: $year";
$dayNow = "day: $day";
$monthNumbers=random_int( 1,12);
$month= match ($monthNumbers){
    1=> 'january',
    2=> 'february',
    3=> 'march',
    4=> 'april',
    5=> 'may',
    6=> 'june',
    7=>'july',
    8=>'August',
    9=>'September',
    10=>'October',
    11=>'November',
    12=>'December',
};
echo "\t";
echo $yearNow,  "\n", "\t";
echo $monthNumbers.':'. $month,   "\n", "\t";
echo $dayNow,   "\n", "\t";