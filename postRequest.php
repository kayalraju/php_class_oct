<?php
echo "<hr>";
echo "<h2>Using POST Method</h2>";

if (isset($_POST['add'])) {
    if (!empty($_POST['num1']) && !empty($_POST['num2'])) {
        $number1 = $_POST['num1'];
        $number2 = $_POST['num2'];
        $result = $number1 + $number2;
    } else {
        $result = "Both numbers are required.";
    }

    echo "<h1>The addition of two number is: " . $result . "</h1>";
}
?>