

<?php

function myName($a,$b){
    echo "My name is " . $a . " " . $b;
}

$fullName=myName("John", "Doe");

echo $fullName;


echo "<br/>";

//call the function sum

include('sum.php');

$sumResult = Sum(50, 10);

echo "sum of two number is  ". $sumResult;

?>