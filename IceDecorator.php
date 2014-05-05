<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include_once 'IDrinkDecorator.php';
/**
 * Description of IceDecorator
 *
 * @author Bert
 */
class IceDecorator extends IDrinkDecorator{
    //put your code here
    /**
     * creates drink with extra
     * @param type $cocktail child of IDrink
     */
    public function __construct($cocktail){
        $this->cocktail = $cocktail;
        $this->cost = 0.09;
        $this->name = " with ice";
        $this->ingredient = "ice";
    }
}
