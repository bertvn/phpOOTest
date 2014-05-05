<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        include_once 'Factory.php';
        // put your code here
        //create factory
        $factory = new Factory();
        //create drink
        $drink = $factory->create($_POST["cocktails"]);
        //if user wants ice add ice
        if($_POST["ice"] == 1){
            $drink = $factory->addIce($drink);
        }
        //if user wants fruit add fruit
        if($_POST["fruit"] == 1){
            $drink = $factory->addFruit($drink);
        }
        //print name, ingredients and cost
        echo $drink->getName();
        echo "<br />";
        echo $drink->getIngredients();
        echo "<br />";
        echo $drink->getCost();
        ?>
    </body>
</html>
