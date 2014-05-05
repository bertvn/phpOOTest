<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include_once 'interfaces/IAlcohol.php';
/**
 * Description of Safari
 *
 * @author Bert
 */
class Safari implements IAlcohol{
    //put your code here
    public $cost = 1.85;
    public $name = "safari";
    
    /**
     * returns cost of safari
     * @return type double
     */
    public function getCost() {
        return $this->cost;
    }

    /**
     * returns name of safari
     * @return type string
     */
    public function getName() {
        return $this->name;
    }
}
