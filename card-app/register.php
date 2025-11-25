<?php
session_start();
?>

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
        <h1 class="mt-4 mb-4">User Registration</h1>

        <?php
        include('./dbConnection.php');

        if (isset($_POST['signup'])) {
            if ($_POST['password'] == $_POST['confirmPassword']) {
                $name = $_POST['name'];
                $email = $_POST['email'];
                $phone = $_POST['phone'];
                $password = password_hash($_POST['password'], PASSWORD_DEFAULT);


                $query = "insert into users (name,email,phone,password) values('$name','$email','$phone','$password')";
                $sql = mysqli_query($connection, $query);

                if ($sql) {
                    //echo "<script>alert('Data Add successfully')</script>";
                    $_SESSION['success_message'] = "Signup successful. Please log in.";
                    header('location:login.php');
                } else {
                    echo "<script>alert('Data Add failed')</script>";
                }
            } else {
                echo "<script>alert('password and confirm password do not match')</script>";
            }
        }

        ?>

        <form action="" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label>Name</label>
                <input type="text" class="form-control" name="name">

            </div>

            <div class="form-group">
                <label>Email</label>
                <input type="email" class="form-control" name="email">

            </div>

            <div class="form-group">
                <label>Phone</label>
                <input type="text" class="form-control" name="phone">

            </div>

            <div class="form-group">
                <label>Password</label>
                <input type="password" class="form-control" name="password">

            </div>
            <div class="form-group">
                <label>Confirm Password</label>
                <input type="password" class="form-control" name="confirmPassword">

            </div>


            <button type="submit" class="btn btn-primary" name="signup">Register</button>
        </form>
        *****if already registered go to <a href="login.php">Login</a>
    </div>
</body>

</html>