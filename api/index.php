<?php
require  '../dbconfig.php'

$sql = "select * from user";
$result = $mysqli -> query($sql);

while($row = $result -> fetch_assoc()){
    $json[] = $row;
}

echo json_encode($json);
?>