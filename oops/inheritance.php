<?php

class employee{
	public $name;
	public $age;
	public $salary;

	function __construct($n, $a, $s){
		$this->name = $n;
		$this->age = $a;
		$this->salary = $s;
	}

	function info(){
		echo "<h3>Employee Profile</h3>";
		echo "Employee Name : " . $this->name . "<br>";
		echo "Employee Age : " . $this->age . "<br>";
		echo "Employee Salary : " . $this->salary . "<br>";
	}
		
}

class manager extends employee{
	public $ta = 1000;
	public $phone = 300;
	public $totalSalary;

	function info(){
		$this->totalSalary = $this->salary + $this->ta + $this->phone;

		echo "<h3>Manager Profile</h3>";
		echo "Employee Name : " . $this->name . "<br>";
		echo "Employee Age : " . $this->age . "<br>";
		echo "Employee Salary : " . $this->totalSalary . "<br>";
	}
}

$e1 = new manager("Ram", 25, 10000);
$e2 = new employee("Krishan", 27, 2000);

$e1->info();
$e2->info();
?>


<hr>


<?php
class Animal {
    public $name;
    public function eat() {
        echo "$this->name is eating.\n";
    }
}
class Dog extends Animal {
    public function bark() {
        echo "$this->name is barking.\n";
    }
}
$dog = new Dog();
$dog->name = "Buddy";
$dog->eat();   
$dog->bark(); 
?>


<?php


// Parent class
class Vehicle {
    public $brand;
    protected $speed;

    public function __construct($brand, $speed) {
        $this->brand = $brand;
        $this->speed = $speed;
    }

    public function move() {
        return "$this->brand is moving.";
    }

    protected function getSpeed() {
        return $this->speed;
    }
}

// Child class inheriting from Vehicle
class Car extends Vehicle {
    public function honk() {
        return "$this->brand honks: Beep!";
    }

    // Override the move method
    public function move() {
        return "$this->brand is driving on the road.";
    }

    // Access protected method from parent
    public function showSpeed() {
        return "$this->brand has a speed of " . $this->getSpeed() . " km/h.";
    }
}

// Create an object of the child class
$car = new Car("Toyota", 120);

// Use methods
echo $car->move();      // Output: Toyota is driving on the road.
echo "<br>";
echo $car->honk();      // Output: Toyota honks: Beep!
echo "<br>";
echo $car->showSpeed(); // Output: Toyota has a speed of 120 km/h.



?>