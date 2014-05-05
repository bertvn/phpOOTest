<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 *
 * @author Bert
 */
interface IDrink {
    //put your code here
    /**
     * returns cost of drink
     */
    public function getCost();
    /**
     * returns name of drink
     */
    public function getName();
    /**
     * returns ingredients of drink
     */
    public function getIngredients();
}
