<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include_once 'interfaces/IAbstractFactory.php';
include_once 'interfaces/ISoda.php';
include_once 'interfaces/IAlcohol.php';
include_once 'interfaces/IGlass.php';

/**
 * Description of AbstractFactory
 *
 * @author Bert
 */
abstract class AbstractFactory implements IAbstractFactory{
    //put your code here
    public $name;
    
    /**
     * creates array with the cocktail ingredients
     * @return type array with ingredients
     */
    public function createDrink(){
        $parts = array();
        $parts[0] = $this->createAlcohol();
        $parts[1] = $this->createGlass();
        $parts[2] = $this->createSoda();
        $parts[3] = $this->name;
        return $parts;
        
    }
    
    //functions to be overridden by child classes
    abstract public function createAlcohol();
    abstract public function createGlass();
    abstract public function createSoda();
}
