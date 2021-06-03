<?php
/**
 * CREATION TRAIT
 */
trait Creation{
    // Properties
    private $created_at;

    // METHODS
    // Set
    public function setCreated($_data){
        $this->created_at = $_data;
    }

    // Get
    public function getCreated(){
        return $this->created_at;
    }
}