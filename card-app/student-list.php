
<!DOCTYPE html>
<html lang="en">
<head>
  <title>hi</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>



<div class="container">
    <h3>All Student</h3> 
    <a href="add.php" class="btn btn-info"> Add Student</a>

    <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Phone</th>
      <th scope="col">City</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
 <tbody> 

      <?php
      include('./dbConnection.php');
      $sql="select * from studnet";
      $query=mysqli_query($connection,$sql);
      if(mysqli_num_rows($query)==0){
        echo "<tr><td colspan='10' class='text-center'>No Records Found</td></tr>";
      }
      ?>
      <?php while($rows=mysqli_fetch_assoc($query)) {?>
      <tr>
        <td><?= $rows['id']?></td>
        <td><?= $rows['name']?></td>
        <td><?= $rows['email']?></td>
        <td><?= $rows['phone']?></td>
        <td><?= $rows['city'] ?></td>
        <td><a href='<?php echo "edit.php?id=".$rows['id']?>' class="btn btn-primary">Edit</a></td>
        <td><a href='<?php echo "delete.php?id=".$rows['id']?>' class="btn btn-danger">Delete</a></td>
      </tr>
      
      <?php } ?>
    </tbody>
</table>
   
</div>


</body>
</html>
