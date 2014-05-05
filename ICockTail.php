<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
    include_once 'interfaces/IDrink.php';
/**
 *
 * @author Bert
 */
    abstract class ICockTail implements IDrink{
        //put your code here
        public $soda;
        public $alcohol;
        public $glass;
        public $name;

        /**
         * returns cost of drink
         * @return type double 
         */
        public function getCost(){
            return $this->soda->cost + $this->alcohol->cost + $this->glass->cost;
        }
        /**
         * returns name of drink
         * @return type string
         */
        public function getName(){
            return $this->name;
        }
        
        /**
         * returns ingredients
         * @return type string
         */
        public function getIngredients() {
            return $this->soda->getName() . ", " . $this->alcohol->getName() . ", " . $this->glass->getName();
        }
    }
?>
