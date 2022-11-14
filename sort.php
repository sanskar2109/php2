<?php
$array=[10,20,30,40,80,50];
$array1=["sanskar"=>85,"tushar"=>56,"aman"=>45];
sort($array);//ascending
print_r($array);
echo "<br>";
rsort($array);//descending
print_r($array);
echo "<br>";
ksort($array);
print_r($array);
echo"sanskar";

echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
krsort($array);
print_r($array);
echo "<br>";

asort($array1);
print_r($array1);
echo "<br>";
arsort($array1);
print_r($array1);
echo "<br>";
natsort($array);//arrange according to ascii value
print_r($array);
echo "<br>";
natcasesort($array);//sort an array using natural order it is case sensitive
print_r($array);
echo "<br>";
echo 'Current script owner: ' . get_current_user();
echo "<br>";
echo "<br>";
$num = 4;
$factorial = 1;
for ($x=$num; $x>=1; $x--)
{
    $factorial = $factorial * $x;
}
echo "Factorial of $num is $factorial";



?>