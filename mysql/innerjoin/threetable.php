<?php


include('./connection.php');

$sql = "
   SELECT p.id,
       p.product_name,
       u.name AS user_name,
       c.category_name
FROM products p
INNER JOIN users  u ON p.user_id = u.id
INNER JOIN categories  c ON p.category_id = c.id;
";

$result = $conn->query($sql);

echo "<h2>User Orders</h2>";

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
      
        echo "User: " . $row["user_name"] . "<br>";
        echo "Product: " . $row["product_name"] . "<br>";
        echo "category: " . $row["category_name"] . "<br><br>";
        echo "<hr>";
    }
} else {
    echo "No orders found.";
}




?>