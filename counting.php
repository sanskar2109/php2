<?php
$counter=1;
echo "<table style='border: 3px solid red;border-collapse:collapse'>";
for( $row=0; $row<10; $row++ )
{
    echo"<tr>";
    for( $col=0; $col<10; $col++ )
    {
        echo "<td style='border: 2px solid aqua'>".$counter."</td>";
        $counter++;
    }
    echo "<tr>";
}
echo "</table>";

?>