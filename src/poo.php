<?php 
  class Duck  {

      private $name;
      private $title;
    public function getName() {
        return $this->name;
    } 
   public function setName($name) {
       $this->name  = $name;
   } 
   public function sayHello() {
       echo "hola {$this->getName()} ";
   } 


    } 

    class Employee {
        public $name = "John";
        // solo funcionan dentro de la clase
        private $wage;
    } 

    $employee = new Employee();
$employee->name = "Mary Swanson";
$name = $employee->name;
echo "New employee: $name";

// encapsulacion de la variable name
class Employee1
{
   private $name;
   public function setName($name) {
      $this->name = $name;
   }
}
$employee = new Employee1;
//set is un accesor de la variable name
$employee->setName("Mary");

class Programmer extends Employee
{
     public function bonus($percent) {
        echo "Bonud = " . $this->wage * $percent / 100;
    }
}

class Employee3
{
    public $name;
    public $city;
    protected $wage1;
    public function __set($propName, $propValue)
    {
        $this->$propName = $propValue;
    }
    public function __get($propName)
    {
        echo "__get called!<br />";
        $vars = array("name", "city");
        if (in_array($propName, $vars))
        {
           return $this->$propName;
        } else {
           return "No such variable!";
        }
    }
}
$employee = new Employee3;
$employee->name = "Mario";
$employee->title = "Executive Chef";
echo "Name: {$employee->name}<br />";
echo "Title: {$employee->title}";
?>

<?php
    class Employee
    {
        private $name;
        // Getter
        public function getName() {
            return $this->name;
        }
        // Setter
        public function setName($name) {
            $this->name = $name;
        }
    }
?>

<?php 

class mathFunctions
{
    const PI = '3.14159265';
    const E = '2.7182818284';
    const EULER = '0.5772156649';
    // Define other constants and methods here...
}
?>

<?php
    class Employee
    {
        private $ein;
        function __construct($ein)
        {
            if ($this->verifyEIN($ein)) {
                echo "EIN verified. Finish";
            }
        }
        protected function verifyEIN($ein)
        {
            return TRUE;
        }
    }
    $employee = new Employee("123-45-6789");

    // class modo base de diferentes tipo de empleado
    abstract class Employee
    {
        abstract function hire();
        abstract function fire();
        abstract function promote();
        abstract function demote();
    }

?>

<?php
    class Employee
    {
        protected $name;
        protected $title;
        function __construct()
        {
            echo "Employee constructor called! ";
        }
    }
    class Manager extends Employee
    {
        function __construct()
        {
            parent::__construct();
            echo "Manager constructor called!";
        }
    }
    $employee = new Manager();
?>


<?php

// constructor de instancias destructor de instancias
    class Book
    {
        private $title;
        private $isbn;
        private $copies;
        function __construct($isbn)
        {
            echo "Book class instance created. ";
        }
        function __destruct()
        {
            echo "Book class instance destroyed.";
        }
    }
    $book = new Book("0615303889");
?>