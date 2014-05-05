<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include_once 'interfaces/IAlcohol.php';
/**
 * Description of Gin
 *
 * @author Bert
 */
class Gin implements IAlcohol{
    //put your code here
    public $cost  = 1.62;
    public $name = "Gin";
    
    /**
     * returns cost of Gin
     * @return type double cost of gin
     */
    public function getCost() {
        return $this->cost;
    }

    /**
     * returns name of gin
     * @return type string name of gin
     */
    public function getName() {
        return $this->name;
    }
}
