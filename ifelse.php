<?php

// if(condition){
//     //code to be executed if condition is true
// }


$age=18;
if($age>18){
    echo "<h1>you are eligible to vote</h1>";
}
else{
    echo "<h1>you are not eligible to vote</h1>";
}

echo "<hr>";

$a=200;
$b=300;
if($a!==$b){
    echo "<h1>a is not equal to b</h1>";
}
else{
    echo "<h1>a is equal to b</h1>";

}

echo "<hr>";
//logical operators AND
$ab=100;
$bc=300;
if($ab==100 && $bc==300){
    echo "<h1>hell welcome to webskitters</h1>";
}else{
    echo "<h1>you are not welcome to webskitters</h1>";
}

echo "<hr>";
//logical operators OR
if($ab==1002 || $bc==300){
    echo "<h1>hell welcome to webskitters</h1>";
}else{
    echo "<h1>you are not welcome to webskitters</h1>";
}

?>