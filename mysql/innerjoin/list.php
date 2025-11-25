<?php
include('./connection.php');

$sql = "
    SELECT users.name, orders.product
    FROM users
    INNER JOIN orders
    ON users.id = orders.user_id
";

$result = $conn->query($sql);

echo "<h2>User Orders</h2>";

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
      
        echo "User: " . $row["name"] . "<br>";
        echo "Product: " . $row["product"] . "<br><br>";
        echo "<hr>";
    }
} else {
    echo "No orders found.";
}

?>
