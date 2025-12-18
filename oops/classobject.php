
<?php

class Car {
    public $color;
    public $model;
    public $company;

    function __construct($color, $model, $company) {
        $this->color = $color;
        $this->model = $model;
        $this->company = $company;
    }

	function show(){
		echo "color is ". $this->color . "<br>";
		echo "model is ". $this->model . "<br>";
		echo "company is ". $this->company . "<br>";
	}

	function modify(){
		echo $this->color = "black";
	}
}

$bmw = new Car("red", "X5", "BMW");
echo $bmw->color . "<br>";
echo $bmw->model . "<br>";
echo $bmw->company . "<br>";

$bmw->show();

echo "<hr>";

$bmw->modify();

echo "<hr>";

$bike= new Car("red","advanture 390","KTM");
echo "bike color is". $bike->color . "<br>";
echo "bike model is" . $bike->model . "<br>";
echo "bike company is". $bike->company . "<br>";






echo "<hr>";

// class calculation{
// 	public $a, $b, $c;

// 	function sum(){
// 		$this->c = $this->a + $this->b;
// 		return $this->c;
// 	}

// 	function sub(){
// 		$this->c = $this->a - $this->b;
// 		return $this->c;
// 	}

// }

// $c1 = new calculation();

// $c1->a = 20;
// $c1->b = 10;

// $c2 = new calculation();

// $c2->a = 50;
// $c2->b = 35;

// echo "Sum Value of C1 : " . $c1->sum() . "
// ";

// echo "<br>";

// echo "Subtraction Value of C2 : " . $c2->sub() , "
// ";

// echo "<br>";

// echo "Subtraction Value of C1 : " . $c1->sub();

// ?>