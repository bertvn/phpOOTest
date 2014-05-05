<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include_once 'interfaces/IGlass.php';
/**
 * Description of SodaGlass
 *
 * @author Bert
 */
class SodaGlass implements IGlass{
    //put your code here
    public $cost = 0.55;
    public $name = "soda glass";
    
    /**
     * returns cost of Sodaglass
     * @return type double
     */
    public function getCost() {
        return $this->cost;
    }

    /**
     * returns name of sodaglass
     * @return type string
     */
    public function getName() {
        return $this->name;
    }
}
