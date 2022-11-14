<?php

// php script to print table.
echo "<table align='center' style='border: 2px solid red; align='center' border=1<br>";

for($row = 1; $row<=10; $row++) {
    echo "<tr>";
    for($col = 1; $col <= 10; $col++) {
        echo "<td align='center' height='20px'>".$row." * ".$col." = ".$row*$col."</td>";
    }
    echo "</tr>";
}

echo "</table>";
