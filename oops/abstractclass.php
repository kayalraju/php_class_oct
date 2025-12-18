<!-- What is an Abstract Class in PHP?

An abstract class is a class that:

Cannot be instantiated (you can’t create an object of it)

Can contain abstract methods (methods without body)

Can also contain normal methods & properties

Is used as a base blueprint for child classes -->

<!-- abstract class ClassName
{
    abstract public function methodName();

    public function normalMethod()
    {
        return "I am a normal method";
    }
} -->

<?php

abstract class Animal
{
    abstract public function sound();

    public function sleep()
    {
        return "Sleeping...";
    }
}

class Dog extends Animal
{
    public function sound()
    {
        return "voof voof voof";
    }
}

class Cat extends Animal
{
    public function sound()
    {
        return "Meow";
    }
}

$dog = new Dog();
echo $dog->sound();   // voof

echo "<br>";

echo $dog->sleep();   // Sleeping...

echo "<br>";
$cat = new Cat();
echo $cat->sound();   // Meow
//  Not allowed
// $animal = new Animal();
 //$animal->sleep();



 echo "<hr>";