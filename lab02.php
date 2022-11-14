<?php
$arr=[100,200];
$ar=array(100,200,300);
$data=["sanskar"=>90,"TUSHAR"=>56,"Rohit"=>81];
$data1=["aman"=>85,"akash"=>46,"Rohit"=>81];
//change to lower case
print_r( array_change_key_case($data));
echo "<br>";
//change to upper case
print_r(array_change_key_case($data,1));
echo "<br>";

//print_r(array_chunk(input,size));
//it will combine two array
print_r(array_combine($data,$data1));
//print_r(array_column("aman",85));
//print_r(array_count_values());
//compare only values
print_r(array_diff($ar,$arr));
echo "<br>";
//campare keys and values
print_r(array_diff_assoc($data,$data1));
echo "<br>";
//compare only keys 
print_r(array_diff_key($data1,$data));
echo "<br>";
//index5,count8,parameters89, values same
$arr1=array_fill(5,8,89);
print_r($arr1);
echo "<br>";
//common valyes display
print_r(array_intersect($arr,$ar));
echo "<br>";
//common keys display
print_r(array_intersect_key($data,$data1));
echo "<br>";
//common keys and values display
print_r(array_intersect_assoc($data,$data1));
echo "<br>";
//print true or false i.e keys is exists or not in data
print_r(array_key_exists("sanskar",$data));
echo "<br>";
//convert values into keys and vice versa
print_r(array_flip($data));
echo "<br>";
//it will display in index value
print_r(array_keys($data));
echo "<br>";
//it will display the sum of all values
print_r(array_sum($data));
echo "<br>";
//it will add the values 
print_r(array_push($ar,400));
echo "<br>";
//it will remove the values
print_r(array_pop($ar,200));
echo "<br>";
//unset();
//it will display product of the values
print_r(array_product($ar));
echo "<br>";
//it will reverse the array
print_r(array_reverse($arr));
echo "<br>";
print_r(array_replace($ar,$arr));
echo "<br>";
print_r(array_merge($data,$data1));
echo "<br>";
print_r(array_search(100,$arr));
$arr2=[100,200,300,400,500];
$arr3=[60,80];
array_splice($arr2,1,3,$arr3);
print_r($arr2);
echo "<br>";
//print_r(array_slice());
echo "<br>"; 
//shuffle the array
print_r(shuffle($arr2));
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
