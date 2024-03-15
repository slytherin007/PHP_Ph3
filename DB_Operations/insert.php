<?php
include 'connect_db.php';


$name=$_POST['fname'];
$email=$_POST['email'];
$phone_no=$_POST['phone'];

$sql="INSERT INTO user (name,email,mobile) VALUES ('$name','$email','$phone_no')";

if($connection->query($sql)===TRUE){
    sleep(3);
    echo "Data Entered Successfully";
    header("Location:read.php");
}
else{
    echo"Failed to connect",$sql,$connection->connect_error;
}


?>