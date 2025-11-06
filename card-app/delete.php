
<?php

include('./dbConnection.php');

$id = $_GET['id'];
$sql="delete from studnet where id=$id";
$query = mysqli_query($connection,$sql);
header('location:student-list.php');

?>