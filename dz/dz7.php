<?php
$degrees = random_int(0, 360);
$result = '';
echo $degrees;
if ($degrees <= 29) {
    $result = ' 1 hour';
} elseif ($degrees <= 59) {
    $result = '2 hour';
} elseif ($degrees <= 89) {
    $result = '3 hour';
} elseif ($degrees <= 119) {
    $result = '4 hour';
} elseif ($degrees <= 149) {
    $result = '5 hour';
} elseif ($degrees <= 179) {
    $result = '6 hour';
} elseif ($degrees <= 209) {
    $result = '7 hour';
} elseif ($degrees <= 239) {
    $result = '8hour';
} elseif ($degrees <= 269) {
    $result = '9 hour';
} elseif ($degrees <= 299) {
    $result = '10 hour';
} elseif ($degrees <= 329){
    $result = '11 hour';
} elseif ($degrees <= 360) {
    $result = '12 hour ';
}
echo $degrees, PHP_EOL, $result;


