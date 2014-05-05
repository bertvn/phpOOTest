<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include_once 'AbstractFactory.php';
include_once 'Rum.php';
include_once 'Cola.php';
include_once 'LongGlass.php';
/**
 * Description of BaCoFactory
 *
 * @author Bert
 */
class BaCoFactory extends AbstractFactory{
    //put your code here
    /**
     * constructor
     */
    public function __construct() {
        $this->name = "BaCo";
    }
    
    /**
     * returns alcohol for drink
     * @return \Rum
     */
    public function createAlcohol() {
        return new Rum();
    }
    /**
     * returns glass for drink
     * @return \LongGlass
     */
    public function createGlass() {
        return new LongGlass();
    }
    
    /**
     * returns soda for drink
     * @return \Cola
     */
    public function createSoda() {
        return new Cola();
    }
    
}
