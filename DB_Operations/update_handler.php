<?php
include 'connect_db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['form_id'])) {
   $id=$_POST['form_id'];
    $name=$_POST['fname'];
    $email=$_POST['email'];
    $mobile=$_POST['phone'];

    $sql="UPDATE user SET name='$name', email='$email', mobile='$mobile' WHERE id='$id'";

    if ($connection->query($sql)==TRUE){
        header("Location:read.php");
    }
}





?>