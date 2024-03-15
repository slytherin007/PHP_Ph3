<?php
include 'connect_db.php';


echo "<table border='1'>
    <tr>
    <th>ID</th>
    <th>Name</th>
    <th>Email</th>
    <th>Mobile</th>
    <th>Operations</th>
    </tr>
";

$sql="SELECT * FROM user";
$result=$connection->query($sql);

if($result->num_rows>0){
    while($row=$result->fetch_assoc()){    
   echo "
    <tr>
        <td>",$row['id'],"</td>
        <td>",$row['name'],"</td>
        <td>",$row['email'],"</td>
        <td>",$row['mobile'],"</td>
        <td>
        
        
        <form method='post' action='delete.php'>

        <input type='hidden' name='form_id'  value='" . $row["id"] . "'>

        <input type='submit' value='Delete'>

        </form>

        </td>

    </tr> ";
    }
}

echo "</table>";



?>