<!-- PHP has 3 access modifiers:

Modifier	Accessible From
public	Anywhere
protected	Same class + child classes
private	Same class only -->
<?php

class User
{
    public $name = "Raju";            // public
    protected $email = "raju@test.com"; // protected
    private $password = "123456";     // private

    // Public method (accessible everywhere)
    public function showName()
    {
        return $this->name;
    }

    // Protected method (class + child)
    protected function showEmail()
    {
        return $this->email;
    }

    // Private method (class only)
    private function showPassword()
    {
        return $this->password;
    }

    // Public method accessing protected & private members
    public function showAll()
    {
        return $this->name . " | " . $this->email . " | " . $this->password;
    }
}

$user = new User();

//  Allowed
//echo $user->showName();

// Not allowed
//echo $user->email;
 //echo $user->password;
 //echo $user->showEmail();
 //echo $user->showPassword();

//  Allowed via public method
//echo $user->showAll();


class Employee extends User
{
    public function getEmail()
    {
        //  Protected property accessible in child class
        return $this->email;
    }

    public function getPassword()
    {
        //  Private property NOT accessible
         return $this->password; // ERROR
    }
}

$emp = new Employee();
echo $emp->getEmail();
echo $emp->getPassword();