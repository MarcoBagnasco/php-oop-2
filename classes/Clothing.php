<?php
// Include Product Class
require_once __DIR__ . '/Product.php';

/**
 * CLOTHING CLASS 
 */
class Clothing extends Product{
    // Properties
    private $type = 'clothing';
    private $size;

    // Constructor
    function __construct($_id, $_name, $_size){
        parent::__construct($_id, $_name);

        $this->size = $_size;
    }

    // METHODS
    // Get
    public function getType(){
        return $this->type;
    }

    public function getSize(){
        return $this->size;
    }

    public function getAllInformation(){
        parent::getAllInformation();
        echo "<div><strong>Size</strong>: {$this->size}</div>";
    }

    // Set
    public function setSize($_size){
        $this->size = $_size;
    }
}
