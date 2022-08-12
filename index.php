<?php

$db_connection = new mysqli('localhost', 'root', '', 'school');


//var_dump($db_connection);

//$sql_query = 'INSERT INTO `teachers_1`(`id`, `name`, `email`, `phone#`, `department`) VALUES (3,"Esmat","suha@gmail.com","054574","maths")';
$sql_query='SELECT * FROM `teachers_1` WHERE 1';

$result=$db_connection->query($sql_query);

echo '<pre>';
//var_dump($result);

//$data = $result->fetch_assoc();
$data = $result->fetch_all(MYSQLI_ASSOC);

//var_dump($data);
?>

<table border="1">
<tr>
    <th>ID</th>
    <th>Name</th>
    <th>Email</th>
    <th>Phone</th>
    <th>Department</th>
</tr>
<tbody>
    <?php
    foreach($data as $record){
        echo    '<tr> 
                   <td>'.$record['id'].'</td>
                   <td>'.$record['name'].'</td>
                   <td>'.$record['email'].'</td>
                   <td>'.$record['phone#'].'</td> 
                   <td>'.$record['department'].'</td> 
                </tr>';
    }

    ?>
</tbody>
</table>