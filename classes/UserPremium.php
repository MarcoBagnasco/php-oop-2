<?php
//Include User Class
require_once __DIR__ . '/User.php';

/**
 * USER PREMIUM CLASS
 */
class UserPremium extends User{
    // Properties
    private $level;

    // Constructor
    function __construct($_firstName, $_lastName, $_age, $_level = 1){
        parent::__construct($_firstName, $_lastName, $_age, $_level);
        $this->level = $_level;
    }

    // METHODS
    // Get
    public function getLevel(){
        return $this->level;
    }

    public function getDetails(){
        echo "<div><strong>Premium User</strong></div>
             <div>Age: {$this->getAge()}</div>
             <div>Email: {$this->getEmail()}</div>
             <div>Premium Level: {$this->getLevel()}</div>
             <div>Discount {$this->getDiscount()}%</div>
             <div><em>Created at {$this->getCreated()}</em></div>";
    }

    // Set
    public function setLevel($_level){
        $this->level = $_level;
    }

    protected function setDiscount(){
        parent::setDiscount();
        if($this->getLevel() > 1){
            $this->discount += 20;
        } else {
            $this->discount += 10;
        }
    }
}