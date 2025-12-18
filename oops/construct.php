<?php
class person
{
    public $namet;
    public $age;
    public $city;

    function __construct($namet = "No Name", $age = 0, $city="kolkata")
    {
        $this->namet = $namet;
        $this->age = $age;
        $this->city = $city;
    }

    function show()
    {
        echo $this->namet . " - " . $this->age . "<br>" . $this->city . "<br>";
    }
}

$p1 = new person();
$p2 = new person("Raju Das", 30, "Dhaka");
$p3 = new person("Salman Khan", 59);


$p1->show();
$p2->show();
$p3->show();
