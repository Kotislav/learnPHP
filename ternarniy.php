
<?php
$year = random_int(0 , 9999);

$daysInFeb = date('t', mktime(0, 0, 0, 2, 1, $year));

echo $daysInFeb > 28 ? 'leap year' : 'default year';