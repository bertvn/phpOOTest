<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include_once 'AbstractFactory.php';
include_once 'Gin.php';
include_once 'SodaGlass.php';
include_once 'Tonic.php';

/**
 * Description of GinTonicFactory
 *
 * @author Bert
 */
class GinTonicFactory extends AbstractFactory{
    //put your code here
    public function __construct() {
        $this->name = "Gin tonic";
    }
    
    /**
     * returns alcohol for drink
     * @return \Gin
     */
    public function createAlcohol() {
        return new Gin();
    }
    
    /**
     * returns glass for drink
     * @return \SodaGlass
     */
    public function createGlass() {
        return new SodaGlass();
    }
    
    /**
     * returns soda for drink
     * @return \Tonic
     */
    public function createSoda() {
        return new Tonic();
    }
}
