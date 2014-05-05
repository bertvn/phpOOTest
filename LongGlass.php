<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include_once 'interfaces/IGlass.php';
/**
 * Description of LongGlass
 *
 * @author Bert
 */
class LongGlass implements IGlass{
    //put your code here
    public $cost = 0.50;
    public $name = "long glass";

    /**
     * returns cost of glass
     * @return type double
     */
    public function getCost() {
        return $this->cost;
    }
    /**
     * returns name of glass
     * @return type string
     */
    public function getName() {
        return $this->name;
    }
}
