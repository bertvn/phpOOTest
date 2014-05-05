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
interface IAbstractFactory {
    //put your code here
    /**
     * creates a child of IAlcohol
     */
    public function createAlcohol();
    /**
     * creates a child of ISoda
     */
    public function createSoda();
    /**
     * creates a child of IGlass
     */
    public function createGlass();
}
