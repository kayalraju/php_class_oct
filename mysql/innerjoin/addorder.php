<?php
    include('./connection.php');

if (isset($_POST['submit'])) {
    $user_id = $_POST['user_id'];
    $product = $_POST['product'];

    $sql = "INSERT INTO orders (user_id, product) VALUES ('$user_id', '$product')";
    if ($conn->query($sql)) {
        echo "Order added successfully!";
    } else {
        echo "Error: " . $conn->error;
    }
}
?>

<form method="post">
    <label>Select User:</label>
    <select name="user_id" required>
        <?php
        $users = $conn->query("SELECT * FROM users");
        while ($u = $users->fetch_assoc()) {
            echo "<option value='{$u['id']}'>{$u['name']}</option>";
        }
        ?>
    </select>

    <br><br>

    <label>Enter Product:</label>
    <input type="text" name="product" required>

    <button type="submit" name="submit">Add Order</button>
</form>
