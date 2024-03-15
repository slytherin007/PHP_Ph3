<?php

include "connect_db.php";


$id=$_POST['form_id'];

$sql="DELETE FROM user WHERE id=$id";


if($connection->query($sql)==TRUE){
    echo "Value is deleted";
    header("Location:read.php");
}


?>