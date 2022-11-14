<?php
$side1=5;
$side2=6;
$side3=9;
$s=(($side1+$side2+$side3/2));
$area=sqrt($s*($s-$side1)*($s-$side2)*($s-$side3));
print("Area of Triangle is :$area");
?>