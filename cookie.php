<?php
//setcookie(name,"value",time()+5,"/four.php",domain,secure,https);
//08:32:50 , time is given in seconds, by default cookie expiry 1 year.
setcookie("cookie",getenv("REMOTE_ADDR"),time()+60*60*24);
if(isset($_COOKIE['cookie'])){
    echo $_COOKIE['cookie'];
}
else{
    echo "cookie not created";
}
//setcookie("cookie","",time()-10);//destroy cookie
 //get_current_user() //for check the userporn


//Syntax to set a cookie
//echo "hello cookies";
//setcookie("category","Books",time()+86400,"/")
?>

