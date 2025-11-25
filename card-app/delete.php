<?php
session_start();

if(!isset($_SESSION['id'])){
     $_SESSION['error_message'] = "You must log in first.";
    header('Location:login.php');
    exit();
}


?>
<?php

include('./dbConnection.php');

$id = $_GET['id'];
$sql="delete from studnet where id=$id";
$query = mysqli_query($connection,$sql);
header('location:student-list.php');

?>