<?php

$ser_name="localhost";
$ser_user_name ="root";
$ser_user_pass="";
$username = $_POST['username'];
$password= $_POST['password'];
$email= $_POST['email'];

$connection_data=mysqli_connect($ser_name,$ser_user_name,$ser_user_pass,'secitoni');
if(!$connection_data){
    die("unable to establish connection").mysqli_connect_error();
}
if(isset($_POST['save'])){
    $insert_query = "INSERT INTO register(user_name,user_emailid,user_password) VALUES('$username','$email','$password')";
    if(mysqli_query($connection_data,$insert_query)){
        echo "record submitted successfully";
    }
    else{
        echo "unable to store the data";
    }
}
if(isset($_POST['display'])){
    $display_query="SELECT * from register";
    $data=(mysqli_query($connection_data,$display_query));
    if(mysqli_num_rows($data)>0) {
        echo "<table border='2px solid'>";
        echo "<td>";
        echo "ID";
        echo "<td>";
        echo "USER NAME";
        echo "</td>";
        echo "<td>";
        echo "USER E-MAIL ID";
        echo "</td>";
        echo "<th>";
        echo "USER PASSWORD";
        echo "</td>";

        while ($result = mysqli_fetch_assoc($data)) {

            echo "<tr>";
            echo "<td>";
            echo $result['id'] . " ";
            echo "</td>";
            echo "<td>";
            echo $result['user_name'] . " ";
            echo "</td>";
            echo "<td>";
            echo $result['user_emailid'] . " ";
            echo "</td>";
            echo "<td>";
            echo $result['user_password'] . " ";
            echo "</td>";

            echo "<td><input type =submit value=update name =update>";
            echo "<td><input type =submit value=delete name =delete>";
            echo "</tr>";

        }
    }else
        {
            echo "No rows found";
        }
        echo "</table>";
    }
    if(isset($_POST['update']))
    {
        $con = mysqli_connect('localhost','root','','sectionm');


  if(!$con)
  {
      echo 'not connect to the server';
  }
 $name = $_POST['username'];
 $eid = $_POST['id'];
  $sql="UPDATE register SET uname='$name' WHERE id='$eid'";
  if(mysqli_query($con,$sql))
  {
      echo "updated";
  }
}

if(isset($_POST['delete']))
{
    echo "delete click";
}
?>