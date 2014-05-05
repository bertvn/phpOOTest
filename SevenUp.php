<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include_once 'interfaces/ISoda.php';
/**
 * Description of SevenUp
 *
 * @author Bert
 */
class SevenUp implements ISoda{
    //put your code here
    public $cost = 0.65;
    public $name = "7up";
    
    /**
     * returns cost of sevenup
     * @return type double
     */
    public function getCost() {
        return $this->cost;
    }

    /**
     * returns name of sevenup
     * @return type string
     */
    public function getName() {
        return $this->name;
    }
}
