<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include_once 'interfaces/ISoda.php';
/**
 * Description of Tonic
 *
 * @author Bert
 */
class Tonic implements ISoda{
    //put your code here
    public $cost = 0.35;
    public $name = "tonic";
    
    /**
     * returns cost of Tonic
     * @return type double
     */
    public function getCost() {
        return $this->cost;
    }

    /**
     * returns name of tonic
     * @return type string
     */
    public function getName() {
        return $this->name;
    }
}
