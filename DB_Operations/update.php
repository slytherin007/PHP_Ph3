<?php
include 'connect_db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['form_id'])) {
   
    $id=$_POST['form_id'];
    $name=$_POST['form_name'];
    $email=$_POST['form_email'];
    $mobile=$_POST['form_mobile'];
}
    echo "
    <form method='post' action='update_handler.php'>
    <input type='hidden' name='form_id'  value='" . $id. "'>
    Name:
        <input type='text' name='fname' value='".$name."'><br>
        Email:
        <input type='email' name='email' value='".$email."'><br>
        MobileNo.:
        <input type='tel' name='phone' maxlength='10' value='".$mobile."'><br>

        <input type='submit' value='Update'>
    </form>
    ";

?>