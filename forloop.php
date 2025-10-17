


<?php

// for("initialization";"condition";"increment/decrement"){
//     //code to be executed
// }


for($i=1;$i<=10;$i++){
    echo $i;
    echo "<br>";
}

echo "<hr>";
for($i=10;$i>=1;$i--){
    echo $i;
    echo "<br>";
}

echo "<hr>";
for($i=1;$i<=10;$i++){
    echo $i*2;
    echo "<br>";
}

//while loop

//syntax
// while("condition"){
//     //code to be executed
// }

$i=1;
while($i<=10){
    echo $i;
    echo "<br>";
    $i++;
}

//do while loop

//syntax
// do{
//     //code to be executed
// }while("condition");

$i=1;
do{
    echo $i;
    echo "<br>";
    $i++;
}while($i<=10);

echo "<hr>";

// Outer loop for the first number (1 to 10)
for ($i = 1; $i <= 10; $i++) {
    // Inner loop for the second number (1 to 10)
    for ($j = 1; $j <= 10; $j++) {
        // Print the product of i and j
        echo $i * $j . "\t";  // \t for tab space between numbers
    }
    echo "<br>";  // New line after each row of multiplication
}


?>