<?php
include('./connection.php');

if (isset($_POST['submit'])) {
    $name = $_POST['name'];

    $sql = "INSERT INTO users (name) VALUES ('$name')";
    if ($conn->query($sql)) {
        echo "User added successfully!";
    } else {
        echo "Error: " . $conn->error;
    }
}
?>

<form method="post">
    <label>Enter User Name:</label>
    <input type="text" name="name" required>
    <button type="submit" name="submit">Add User</button>
</form>
