<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include_once 'interfaces/ISoda.php';
/**
 * Description of Cola
 *
 * @author Bert
 */
class Cola implements ISoda{
    //put your code here
    public $cost = 0.75;
    public $name = "Cola";
    
    /**
     * returns cost of cola
     * @return type double containing cost
     */
    public function getCost() {
        return $this->cost;
    }
    
    /**
     * returns name of cola
     * @return type string containing name
     */
    public function getName() {
        return $this->name;
    }
}
