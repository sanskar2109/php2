<?php

$num = 2548;

while($num >= 10) {
    $sum = 0;
    while($num != 0) {
        $sum += ($num % 10);
        $num /= 10;
    }
    $num = $sum;
}

echo $num;

?>