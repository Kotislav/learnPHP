<?php
$degrees = random_int(0, 360);
if ($degrees<=29){
    echo ' 1 hour';
}elseif (($degrees>=30) && ($degrees<=59)){
    echo '2 hour';
}elseif (($degrees>=60) && ($degrees<=89)){
    echo '3 hour';
}elseif (($degrees>=90) && ($degrees<=119)){
    echo '4 hour';
}elseif ($degrees>=120 && $degrees<=149){
    echo '5 hour';
}elseif (($degrees>=150) && ($degrees<=179)){
    echo '6 hour';
}elseif (($degrees>=180) && ($degrees<=209)){
    echo '7 hour';
}elseif (($degrees>=210) && ($degrees<=239)){
    echo '8hour';
}elseif (($degrees>=240) && ($degrees<=269)){
    echo '9 hour';
}elseif (($degrees>=270) && ($degrees<=299)){
    echo '10 hour';
}elseif (($degrees>=300) && ($degrees<=329)){
    echo '11 hour';
}elseif (($degrees>=330) && ($degrees<=360)) {
    echo '12 hour ';
}




