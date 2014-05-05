<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include_once 'interfaces/IFactory.php';
include_once 'interfaces/ISoda.php';
include_once 'interfaces/IAlcohol.php';
include_once 'interfaces/IGlass.php';
include_once 'IceDecorator.php';
include_once 'FruitDecorator.php';
include_once 'BaCoFactory.php';
include_once 'GinTonicFactory.php';
include_once 'SunriseFactory.php';
include_once 'CockTail.php';
/**
 * Description of Factory
 *
 * @author Bert
 */
class Factory implements IFactory{
    //put your code here
    
    /**
     * 
     * @param type $id choice of cocktail
     */
    public function create($id) {
        $abstractFactory = 0;
        //create abstractfactory based on id
        switch ($id) {
            case 0:
                $abstractFactory = new BaCoFactory();
                break;
            case 1:
                $abstractFactory = new SunriseFactory();
                break;
            case 2:
                $abstractFactory = new GinTonicFactory();
                break;
            default:
                break;
        }
        //start cocktail making
        $parts = $abstractFactory->createDrink();
        //process recieved array into cocktail
        $drink = new CockTail($parts[2], $parts[1], $parts[0], $parts[3]);
        //return cocktail
        return $drink;
    }
    
    /**
     * 
     * @param type $drink cocktail that needs ice
     * @return \IceDecorator IDrink with ice decorator
     */
    public function addIce($drink) {
        return new IceDecorator($drink);
    }
    
    /**
     * 
     * @param type $drink cocktail that needs fruit
     * @return \FruitDecorator IDrink with fruit decorator
     */
    public function addFruit($drink) {
        return new FruitDecorator($drink);
    }
}
