<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include_once 'Safari.php';
include_once 'AbstractFactory.php';
include_once 'SodaGlass.php';
include_once 'SevenUp.php';
/**
 * Description of SunriseFactory
 *
 * @author Bert
 */
class SunriseFactory extends AbstractFactory{
    //put your code here
    public function __construct() {
        $this->name = "Sunrise";
    }
    /**
     * creates Alcohol for cocktail
     * @return \Safari
     */
    public function createAlcohol() {
        return new Safari();
    }
    /**
     * creates Glass for cocktail
     * @return \SodaGlass
     */
    public function createGlass() {
        return new SodaGlass();
    }
    
    /**
     * creates Soda for cocktail
     * @return \SevenUp
     */
    public function createSoda() {
        return new SevenUp();
    }
}
