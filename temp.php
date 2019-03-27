<?php

include 'connect.php';
mysqli_set_charset('conn','utf8');
$query= "SELECT * from mainpost;";
$result = mysqli_query($conn, $query);
while($row = mysqli_fetch_assoc($result)) {
    echo $row['title'];
 }

 ?>
