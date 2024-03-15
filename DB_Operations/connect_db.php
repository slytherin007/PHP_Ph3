<?php
$server="localhost:3307";
$username="root";
$password="";
$database="user_info_management";

$connection=new mysqli($server,$username,$password,$database);

if($connection->connect_error){
    echo $connection->connect_error;
}

?>