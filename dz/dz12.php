<?php
$words = 'abba';
$result='';
$palindrom = strrev($words);
if ($palindrom === $words) {
    $result= 'yes';
} else {
    $result = 'no';
}
echo PHP_EOL;





