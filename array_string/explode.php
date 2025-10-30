
<?php
//syntax: array_explode(delimiter, string, limit)   


$user="hi welcome to php programming";

$array=explode(" ",$user,4);

echo "<pre>";
print_r($array);
echo "</pre>";


//implode() function
//syntax: implode(glue, pieces)

$array1=array("hi","welcome","to","php","programming");

echo implode(" ",$array1);


?>