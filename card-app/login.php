<?php
session_start();

if (isset($_SESSION['error_message'])) {
    $error_message = $_SESSION['error_message'];
    unset($_SESSION['error_message']); // Clear the message after displaying it
}
$error_message = $error_message ?? '';


if (isset($_SESSION['success_message'])) {
    $success_message = $_SESSION['success_message'];
    unset($_SESSION['success_message']); // Clear the message after displaying it
}
$success_message = $success_message ?? '';
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
        <?php if ($error_message): ?>
            <div class="alert alert-danger" style="margin-top: 20px;">
                <?php echo $error_message; ?>
            </div>
        <?php endif; ?>

        <?php if ($success_message): ?>
            <div class="alert alert-success" style="margin-top: 20px;">
                <?php echo $success_message; ?>
            </div>
        <?php endif; ?>
        
        <h1 class="mt-4 mb-4">User Login</h1>

        <?php
        include('./dbConnection.php');
        if (isset($_POST['login'])) {
            $email = $_POST['email'];
            $password = $_POST['password'];

            // Query to fetch the user from the database
            $query = "SELECT * FROM users WHERE email = '$email'";
            $sql = mysqli_query($connection, $query);
            $row = mysqli_fetch_array($sql);

            // Check if user exists and verify the password
            if (is_array($row)) {
                // Compare the entered password with the hashed password in the database
                if (password_verify($password, $row['password'])) {
                    // Password is correct, set session variables
                    $_SESSION["id"] = $row['id'];
                    $_SESSION["name"] = $row['name'];
                    $_SESSION['success'] = "Login successful.";

                    // Redirect to the student page or dashboard
                    header('location:dashboard.php');
                    exit();
                } else {
                    // Password mismatch
                    echo "Login failed. Incorrect password.";
                    $_SESSION['error_message'] = "Login failed. Incorrect password.";
                    header('location:login.php');
                }
            } else {
                // User not found
                echo "Login failed. User not found.";
                $_SESSION['error_message'] = "Login failed. User not found.";
                header('location:login.php');
            }
        }

        ?>

        <form action="" method="post" enctype="multipart/form-data">


            <div class="form-group">
                <label>Email</label>
                <input type="email" class="form-control" name="email">

            </div>

            <div class="form-group">
                <label>Password</label>
                <input type="password" class="form-control" name="password">

            </div>

            <button type="submit" class="btn btn-primary" name="login">Login</button>
        </form>

        *****if not registered go to <a href="register.php">Register</a>
    </div>
</body>

</html>