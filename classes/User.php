<?php
// Import Creation Trait
require_once __DIR__ . '/../traits/Creation.php';
/**
 * USER CLASS
 */
class User{
    // Trait
    use Creation;

    // Properties
    private $firstName;
    private $lastName;
    private $age;
    private $email;
    protected $discount;

    // Constructor
    function __construct($_firstName, $_lastName, $_age){
        $this->firstName = $_firstName;
        $this->lastName = $_lastName;
        if($_age < 18){
            throw new Exception('You must be at least 18 years old');
        } elseif ($_age > 100) {
            throw new Exception('Invalid age');
        } else {
            $this->age = $_age;
        }
    }

    // METHODS
    // Get
    public function getFirstName(){
        return $this->firstName;
    }

    public function getLastName(){
        return $this->lastName;
    }

    public function getAge(){
        return $this->age;
    }

    public function getEmail(){
        return $this->email;
    }

    public function getFullName(){
        return $this->firstName . ' ' . $this->lastName;
    }

    public function getDetails(){
        echo "<div>Age: {$this->getAge()}</div>
             <div>Email: {$this->getEmail()}</div>
             <div>Discount: {$this->getDiscount()}%</div>
             <div><em>Created at {$this->getCreated()}</em></div>";
    }

    public function getDiscount(){
        $this->setDiscount();

        return $this->discount;
    }

    // Set
    public function setFirstName($_firstName){
        $this->firstName = $_firstName;
    }

    public function setLastName($_lastName){
        $this->lastName = $_lastName;
    }
    
    public function setAge($_age){
        if($_age < 18){
            throw new Exception('You must be at least 18 years old');
        } elseif ($_age > 100) {
            throw new Exception('Invalid age');
        } else {
            $this->age = $_age;
        }
    }

    public function setEmail($_email){
        $this->email = $_email;
    }

    protected function setDiscount(){
        if($this->age > 60){
            $this->discount = 20;
        } else {
            $this->discount = 0;
        }
    }
}