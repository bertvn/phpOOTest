<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include_once 'interfaces/IAlcohol.php';
/**
 * Description of Rum
 *
 * @author Bert
 */
class Rum implements IAlcohol{
    //put your code here
    public $cost = 2.20;
    public $name = "rum";
    
    /**
     * returns cost of rum
     * @return type double
     */
    public function getCost() {
        return $this->cost;
    }

    /**
     * returns name of rum
     * @return type string
     */
    public function getName() {
        return $this->name;
    }

}
