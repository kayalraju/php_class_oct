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
   

    <div class="container">
        <h1>Employee List Group By</h1>
        
        <h6>The GROUP BY statement groups rows that have the same values into summary rows</h6>

                

       <h2>Count Employees in Each Department</h2>
        <?php
            include('./connection.php');

            $sql = "SELECT department, COUNT(*) AS total_employees
                    FROM employees
                    GROUP BY department;";

            $result = $conn->query($sql);

        ?>

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Deperment</th>
                    <th scope="col">Total Employee</th>
                </tr>
            </thead>
            <tbody>
            <?php
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>";
                
                    echo "<td>" . $row["department"] . "</td>";
                    echo "<td>" . $row["total_employees"] . "</td>";
                    echo "</tr>";
                }
            }
            ?>
            </tbody>
        </table>

        <hr>

       <h2>Total Salary Paid per Department</h2>
        <?php
            include('./connection.php');

            $sql = "SELECT department, SUM(salary) AS total_salary
                    FROM employees
                    GROUP BY department
                    order by total_salary desc;";

            $result = $conn->query($sql);

        ?>

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Deperment</th>
                    <th scope="col">Total Salary</th>
                </tr>
            </thead>
            <tbody>
            <?php
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>";
                
                    echo "<td>" . $row["department"] . "</td>";
                    echo "<td>" . $row["total_salary"] . "</td>";
                    echo "</tr>";
                }
            }
            ?>
            </tbody>
        </table>

        <hr>
       <h2>Average Salary per Department</h2>
        <?php
            include('./connection.php');

            $sql = "SELECT department, AVG(salary) AS average_salary
                    FROM employees
                    GROUP BY department";

            $result = $conn->query($sql);

        ?>

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Deperment</th>
                    <th scope="col">Average Salary</th>
                </tr>
            </thead>
            <tbody>
            <?php
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>";
                
                    echo "<td>" . $row["department"] . "</td>";
                    echo "<td>" . $row["average_salary"] . "</td>";
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