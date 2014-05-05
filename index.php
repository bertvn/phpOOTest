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
        // put your code here
        ?>
        <form action="View.php" method="post">
            Kies een cocktail:<br />
            <select name="cocktails">
                <option value=0 selected>BaCo</option>
                <option value=1>sunrise</option>
                <option value=2>gin tonic</option>
            </select><br /><br />
            ijs: <br />
            <input type="radio" name="ice" value=1>ja<br>
            <input type="radio" name="ice" value=0 checked>nee<br /><br />
            
            fruit:<br />
            <input type="radio" name="fruit" value=1>ja<br>
            <input type="radio" name="fruit" value=0 checked>nee<br /><br />
            <input type="submit" value="Submit">
        </form>
    </body>
</html>
