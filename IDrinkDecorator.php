<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include_once 'interfaces/IDrink.php';
/**
 * Description of IDrinkDecorator
 *
 * @author Bert
 */
abstract class IDrinkDecorator implements IDrink{
    //put your code here
        public $cocktail;
        public $cost;
        public $name;
        public $ingredient;
        
        /**
         * returns cost of drink
         * @return type double
         */
        public function getCost(){
            return $this->cost + $this->cocktail->getCost();
        }
        /**
         * returns name of drink
         * @return type string
         */
        public function getName(){
            return $this->cocktail->getName() . $this->name;
        }
        
        /**
         * returns ingredients of drink
         * @return type string
         */
        public function getIngredients(){
            return $this->cocktail->getIngredients() . ", " . $this->ingredient;
        }
}
