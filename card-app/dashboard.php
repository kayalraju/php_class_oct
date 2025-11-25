<?php
session_start();
if(!isset($_SESSION['id'])){
   $_SESSION['error_message'] = "You must log in first.";
  header('Location:login.php');
  exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<h1>Dashboard</h1>

<h2>hi ...  <?php echo $_SESSION['name']; ?></h2>


<h3><a href="logout.php">Logout</a></h3>
</body>
</html>