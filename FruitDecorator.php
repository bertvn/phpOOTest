<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include_once 'IDrinkDecorator.php';
/**
 * Description of FruitDecorator
 *
 * @author Bert
 */
class FruitDecorator extends IDrinkDecorator{
    //put your code here
    /**
     * constructor for cocktail with fruit
     * @param type $cocktail cocktail that needs fruit
     */
    public function __construct($cocktail){
        $this->cocktail = $cocktail;
        $this->cost = 0.25;
        $this->name = " with lemon";
        $this->ingredient = "lemon";
    }
}
