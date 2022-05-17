<?php
$finger = random_int(1, 5);
$result = '';
if ($finger === 1) {
    $result = 'большой';
} elseif ($finger === 2) {
    $result = 'указательный';
} elseif ($finger === 3) {
    $result = 'средний';
} elseif ($finger === 4) {
    $result = 'безымянный';
} elseif ($finger === 5) {
    $result = 'мизинец';
}
echo $finger, PHP_EOL, $result;
//Працює. Спробуйте знайти біль коротке рішення :)
// Новый пример
$finger = random_int(1, 5);
$result = [
    1 => 'большой',
    2 => 'указательный',
    3 => 'средний',
    4 => 'безымянный',
    5 => 'мизинец',
];
echo $result[$finger];