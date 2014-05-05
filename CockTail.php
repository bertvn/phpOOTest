<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
    include_once 'ICockTail.php';
    include_once 'interfaces/ISoda.php';
    include_once 'interfaces/IAlcohol.php';
    include_once 'interfaces/IGlass.php';
/**
 * Description of CockTail
 *
 * @author Bert
 */
    class CockTail extends ICockTail{
        //put your code here
        /**
         * creates cocktail
         * @param type $soda child of ISoda
         * @param type $glass child of IGlass
         * @param type $alcohol child of IAlcohol
         * @param type $name string containing cocktail name
         */
        public function __construct($soda,$glass,$alcohol,$name) {
            $this->soda = $soda;
            $this->alcohol = $alcohol;
            $this->glass = $glass;
            $this->name = $name;
        }
    }

