<?php
/**
 * PRODUCT CLASS
 */
class Product{
    // Trait
    use Creation;

    // Properties
    private $id;
    private $name;
    private $price;

    // Constructor
    function __construct($_id, $_name){
        $this->id = $_id;
        $this->name = $_name;
    }

    // METHODS
    // Get
    public function getID(){
        return $this->id;
    }

    public function getName(){
        return $this->name;
    }

    public function getPrice(){
        return number_format($this->price, 2);
    }
    
    public function getAllInformation(){
        echo "<div><strong>ID:</strong> {$this->getID()}</div>
             <div><em>Created at {$this->getCreated()}</em></div>
             <div><strong>Name:</strong> {$this->getName()}</div>
             <div><strong>Price:</strong> €{$this->getPrice()}</div>";
    }

    // Set
    public function setID($_id){
        $this->id = $_id;
    }

    public function setName($_name){
        $this->name = $_name;
    }

    public function setPrice($_price){
        if(is_numeric($_price) && $_price >= 0){
            $this->price = $_price;
        } else {
            throw new Exception("Invalid price");
        }
    }
}