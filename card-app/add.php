<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Add Student</title>

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
</head>
<body>
<div class="container">
  <h1 class="mt-4 mb-4">Add Student</h1>

  <?php
  include('./dbConnection.php');

  $nameErr = $emailErr = $phoneErr = $cityErr = $fileErr = "";
  $name = $email = $phone = $city = "";
  $hobbies = [];

  if (isset($_POST['add'])) {

      $name = trim($_POST['name']);
      $email = trim($_POST['email']);
      $phone = trim($_POST['phone']);
      $city = trim($_POST['city']);
      $hobbies = isset($_POST['hobbies']) ? $_POST['hobbies'] : [];

      // Validation
      if (empty($name)) $nameErr = "Name is required.";
      if (empty($email)) $emailErr = "Email is required.";
      elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) $emailErr = "Invalid email format.";
      if (empty($phone)) $phoneErr = "Phone number is required.";
      elseif (!preg_match("/^[0-9]{10}$/", $phone)) $phoneErr = "Invalid phone number.";
      if (empty($city)) $cityErr = "City is required.";

      // Handle file upload
      $fileNewName = "";
      if (!empty($_FILES['file']['name'])) {
          $file = $_FILES['file'];
          //var_dump($file);
          $fileName = $file['name'];
          $fileTmpName = $file['tmp_name'];
          $fileSize = $file['size'];
          $fileError = $file['error'];
          $fileExt = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));
          $allowed = ['jpg', 'jpeg', 'png', 'gif'];

          if ($fileError !== 0) {
              $fileErr = "Error uploading file.";
          } elseif ($fileSize > 500000) {
              $fileErr = "File too large (max 500KB).";
          } elseif (!in_array($fileExt, $allowed)) {
              $fileErr = "Invalid file type.";
          } else {
              $fileNewName = uniqid('', true) . '.' . $fileExt;
              $fileDestination = 'uploads/' . $fileNewName;
              move_uploaded_file($fileTmpName, $fileDestination);
          }
      }

      // If no validation errors
      if (empty($nameErr) && empty($emailErr) && empty($phoneErr) && empty($cityErr) && empty($fileErr)) {
          $hobbiesStr = implode(', ', $hobbies);
          $query = "INSERT INTO studnet (name, email, phone, city, hobbies, file_name)
                    VALUES ('$name', '$email', '$phone', '$city', '$hobbiesStr', '$fileNewName')";
          $sql = mysqli_query($connection, $query);

          if ($sql) {
              header('Location: student-list.php');
              exit;
          } else {
              echo "<script>alert('Data Add Failed')</script>";
          }
      }
  }
  ?>

  <form action="" method="post" enctype="multipart/form-data">
      <div class="form-group">
          <label>Name</label>
          <input type="text" class="form-control" name="name" value="<?= $name ?>">
          <span class="text-danger"><?= $nameErr ?></span>
      </div>

      <div class="form-group">
          <label>Email</label>
          <input type="email" class="form-control" name="email" value="<?= $email ?>">
          <span class="text-danger"><?= $emailErr ?></span>
      </div>

      <div class="form-group">
          <label>Phone</label>
          <input type="text" class="form-control" name="phone" value="<?= $phone ?>">
          <span class="text-danger"><?= $phoneErr ?></span>
      </div>

      <div class="form-group">
          <label>City</label>
          <input type="text" class="form-control" name="city" value="<?= $city ?>">
          <span class="text-danger"><?= $cityErr ?></span>
      </div>

      <div class="form-group">
          <label>Hobbies</label><br>
          <?php
          $hobbyOptions = ['Cricket', 'Football', 'Reading', 'Traveling', 'Music','Dancing'];
          foreach ($hobbyOptions as $hobby) {
              $checked = in_array($hobby, $hobbies) ? 'checked' : '';
              echo "<label class='checkbox-inline'>
                      <input type='checkbox' name='hobbies[]' value='$hobby' $checked> $hobby
                    </label>";
          }
          ?>
      </div>

      <div class="form-group">
          <label>Upload Image</label>
          <input type="file" class="form-control" name="file">
          <span class="text-danger"><?= $fileErr ?></span>
      </div>

      <button type="submit" class="btn btn-primary" name="add">Add Student</button>
  </form>
</div>
</body>
</html>


