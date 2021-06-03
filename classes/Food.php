<?php
// Include Product Class
require_once __DIR__ . '/Product.php';

/**
 * CLOTHING CLASS 
 */
class Food extends Product{
    // Properties
    private $type = 'food';
    private $weight;

    // Constructor
    function __construct($_id, $_name, $_weight){
        parent::__construct($_id, $_name);

        $this->weight = $_weight;
    }

    // METHODS
    // Get
    public function getType(){
        return $this->type;
    }

    public function getWeight(){
        return $this->weight;
    }

    public function getAllInformation(){
        parent::getAllInformation();
        echo "<div><strong>Weight</strong>: {$this->weight}</div>";
    }
    // Set
    public function setWeight($_weight){
        $this->weight = $_weight;
    }
}