<?php
require '../dbconfig.php';
//http://localhost/post/api/index.php
//[{
    "name":'abc'
//}]

$post = file_get_contents("php://input");

$content = (array)json_decode($post,true);

$sql = "insert into user('name') values('".$content[0]['name']."')";

$result = $mysqli->query($sql);

$last_id = mysqli_insert_id($mysqli);
print_r("last inserted id is = " .$last_id);

$query = "select * from user where id = '".$last_id."' ";
$res = $mysqli->query($query);
$arr = array();

while ($row = $res->fetch_assoc())
{

    $arr[] = $row;
}

echo json_encode($arr);
?>
