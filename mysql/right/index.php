<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <title>add</title>
</head>

<body>
    <?php
    include('./connection.php');

    $sql = "SELECT 
                ords.id AS order_id,
                ords.product,
                customers.id AS customer_id,
                customers.name
            FROM ords
            RIGHT JOIN customers
                ON ords.customer_id = customers.id
            ORDER BY customers.id
            ";

    $result = $conn->query($sql);



    ?>

    <div class="container">
        <h1>customer buying product</h1>
        <h6>****Right Join</h6>
        <p>The RIGHT JOIN keyword returns all records from the right table (table2), and the matching records from the left table (table1). The result is 0 records from the left side, if there is no match</p>
        <!-- SELECT column_name(s)
                FROM table1
                RIGHT JOIN table2
                ON table1.column_name = table2.column_name; -->

                <img src="https://cdn.educba.com/academy/wp-content/uploads/2020/06/Left-Join-vs-Right-Join.jpg" alt="" height="200px" width="400px">
                <br><br>

        <a href="customer.php" class="btn btn-primary">Add Customer</a>
        <a href="order.php" class="btn btn-success">Add order</a>

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Customer Name</th>
                    <th scope="col">Product Name</th>
                </tr>
            </thead>
            <tbody>
            <?php
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . $row["order_id"] . "</td>";
                    echo "<td>" . $row["name"] . "</td>";
                    echo "<td>" . $row["product"] . "</td>";
                    echo "</tr>";
                }
            }
            ?>
            </tbody>
        </table>

    </div>


    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
</body>

</html>