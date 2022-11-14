<?php
$n = 1;
echo "<table align='center' style='border: 0px solid red ;border-collapse:collapse'>";
for ($i = 0; $i < 10; $i++) {
    echo"<tr>";
    for ($j = 0; $j <= $i; $j++) {
        echo "<td style='border: 2px solid red'>".$n."</td>";
        $n++;
    }
    echo "</tr>";

}
echo "</table>";
