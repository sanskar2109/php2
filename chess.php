<?php
echo"<table  align='center' style='border:1px solid black;border-collapse: collapse'>";
for($row=0;$row<=8;$row++)
{
    echo"<tr>";
    for($column=0;$column<8;$column++)
    {
        if(($row+$column)%2==0){
            echo "<td style='background-color:black;height:50px;width:50px'> </td>";
        }


        else{echo "<td style='background-color:white;height:50px;width:50px'></td>";
        }
    }
    echo "</tr>";
}
echo"</table>";

