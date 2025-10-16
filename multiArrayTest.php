<?php

$employees = [
    ["name" => "Alice", "position" => "Manager", "salary" => 50000],
    ["name" => "Bob", "position" => "Developer", "salary" => 40000],
    ["name" => "Charlie", "position" => "Designer", "salary" => 35000],
    ["name" => "Diana", "position" => "HR", "salary" => 42000]
];

// Print employee details in a table format
echo "<table border='1' cellpadding='10' width='100%'>";
echo "<tr><th>Name</th><th>Position</th><th>Salary</th></tr>";

foreach ($employees as $employee) {
    echo "<tr>
            <td>{$employee['name']}</td>
            <td>{$employee['position']}</td>
            <td>{$employee['salary']}</td>
          </tr>";
}

echo "</table>";



?>
<hr>
<?php

$students = [
    "John" => 85,
    "Sarah" => 92,
    "David" => 78,
    "Emma" => 88
];

// Add a new student
$students["Michael"] = 95;

// Update an existing student's grade
$students["David"] = 82;

// Print name and grade of each student
foreach ($students as $name => $grade) {
    echo "$name: $grade\n";
}



echo "<hr>";
    $fruits = ["Apple", "Banana", "Cherry", "Mango", "Orange"];

// Add a new fruit
$fruits[] = "Pineapple";

// Remove the last fruit
array_pop($fruits);

// Print all fruits
foreach ($fruits as $fruit) {
    echo $fruit . "\n";
}


?>


