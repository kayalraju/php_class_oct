<?php

include('./connection.php');

$sql = "SELECT a.id AS author_id,
               a.name,
               a.email,
               b.id AS blog_id,
               b.title AS blog_title
        FROM authors a
        LEFT JOIN blogs b ON a.id = b.author_id
        ORDER BY a.id DESC";


$row=$conn->query($sql);
if ($row->num_rows > 0) {
    while ($result = $row->fetch_assoc()) {
        echo "Author ID: " . $result["author_id"] . "<br>";
        echo "Author Name: " . $result["name"] . "<br>";
        echo "Author Email: " . $result["email"] . "<br>";
        echo "Blog ID: " . $result["blog_id"] . "<br>";
        echo "Blog Title: " . $result["blog_title"] . "<br><br>";
        echo "<hr>";
    }
} else {
    echo "No orders found.";
}
?>
