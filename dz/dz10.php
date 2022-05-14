<?php
$finger = random_int(1, 5);
if ($finger = 1) {
    echo 'большой';
}elseif($finger=2) {
    echo 'указательный';
}elseif ($finger=3) {
    echo 'средний';
}elseif ($finger=4){
    echo 'безымянный';
   }elseif ($finger=5){
        echo 'мизинец';
}
echo $finger;