<?php

$num = random_int(0,9999);

if ((1000 / $num) % 10 === 1) echo ' одна тысяча ';
elseif (($num / 1000) % 10 === 2) echo ' Две тысячи ';
elseif (($num / 1000) % 10 === 3) echo ' Три тысячи ';
elseif (($num / 1000) % 10 === 4) echo ' Четыре тысячи ';
elseif (($num / 1000) % 10 === 5) echo ' Пять тысяч ';
elseif (($num / 1000) % 10 === 6) echo ' Шесть тысяч ';
elseif (($num / 1000) % 10 === 7) echo ' Семь тысяч ';
elseif (($num / 1000) % 10 === 8) echo ' Восемь тысяч ';
elseif (($num / 1000) % 10 === 9) echo ' Девять тысяч ';

if (($num / 100) % 10 === 1)
    echo ' сто ';
    elseif (($num / 100) % 10 === 2) echo ' двести ';
    elseif (($num / 100) % 10 === 3) echo ' триста ';
    elseif (($num / 100) % 10 === 4) echo ' четыреста ';
    elseif (($num / 100) % 10 === 5) echo ' пятьсот ';
    elseif (($num / 100) % 10 === 6) echo ' шестьсот ';
    elseif (($num / 100) % 10 === 7) echo ' семьсот ';
    elseif (($num / 100) % 10 === 8) echo ' восемьсот ';
    elseif (($num / 100) % 10 === 9) echo ' девятьсот ';

if (($num / 10) % 10 === 1){
    if ($num % 10 === 0) echo ' десять долларов ';
        elseif ($num % 10 === 1) echo ' одиннадцать долларов ';
        elseif ($num % 10 === 2) echo ' двенадцать долларов ';
        elseif ($num % 10 === 3) echo ' тринадцать долларов ';
        elseif ($num % 10 === 4) echo ' четырнадцать долларов ';
        elseif ($num % 10 === 5) echo ' пятнадцать долларов ';
        elseif ($num % 10 === 6) echo ' шестнадцать долларов ';
        elseif ($num % 10 === 7) echo ' семнадцать долларов ';
        elseif ($num % 10 === 8) echo ' восемнадцать долларов ';
        elseif ($num % 10 === 9) echo ' девятнадцать долларов ';
    }
if (($num / 10) % 10 === 2) echo ' двадцать ';
elseif (($num / 10) % 10 === 3) echo ' тридцать ';
elseif (($num / 10) % 10 === 4) echo ' сорок ';
elseif (($num / 10) % 10 === 5) echo ' пятьдесят ';
elseif (($num / 10) % 10 === 6) echo ' шестьдесят ';
elseif (($num / 10) % 10 === 7) echo ' семьдесят ';
elseif (($num / 10) % 10 === 8) echo ' восемьдесят ';
elseif (($num / 10) % 10 === 9) echo ' девяносто ';

if (($num / 10) % 10 !== 1) {
    if ($num % 10 === 0) echo ' долларов ';
    elseif ($num % 10 == 1) echo 'один доллар';
    elseif ($num % 10 === 2) echo ' два доллара ';
    elseif ($num % 10 === 3) echo ' три доллара ';
    elseif ($num % 10 === 4) echo ' четыре доллара ';
    else if ($num % 10 === 5) echo ' пять долларов ';
    else if ($num % 10 === 6) echo ' шесть долларов ';
    else if ($num % 10 === 7) echo ' семь долларов ';
    else if ($num % 10 === 8) echo ' восемь долларов ';
    else echo ' девять долларов ';
}
echo $num, PHP_EOL;