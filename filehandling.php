<?php
//$var = fopen("filename.txt","w"); //  it will open file for writing if file not eists then it will create the file.
//fwrite($var,"hello");

$handle=fopen('filename.txt','r');
while(!feof($handle)){
    echo fgets ($handle,102);
    echo "<br";
}
?>