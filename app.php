<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<h1>welcome to webskitters</h1>

<?php
echo "hello world"."<br>";
echo "hello world welcome to webskitters"."<br>";
echo "<br>";

$name="webskitters";
echo "hello welcome to ".$name."<br>";

$number=10;
echo "the number is ".$number."<br>";

$float=10.5;
echo "the float value is ".$float."<br>";

$boolean=false;
echo "the boolean value is ".($boolean ? 'true' : 'false')."<br>";

$array=array("html","css","js","php");
echo "the array values are: ";
print_r($array);
echo "<br>";


?>

<hr>
<?php

$x="hello";

$$x="hello world";
echo $x;
echo "<br>";
echo $$x;
echo "<br>";
echo $hello;
?>
<hr>

<?php

echo $name;

?>
</body>
</html>

</html>
