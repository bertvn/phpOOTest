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
interface IFactory {
    //put your code here
    /**
     * creates a cocktail with id
     */
    public function create($id);
    /**
     * add ice to drink
     */
    public function addIce($drink);
    /**
     * add fruit to drink
     */
    public function addFruit($drink);
}
