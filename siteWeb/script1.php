<?php // typage strict.
    declare(strict_types=1); 

    require('functions.php');
    define ("longeurLigneSepar" , "200");
    define ("longeurLigneSeparMoitie" , "100");
    
    echo "<h3>Typage strict</h3>";
    // strict requirement
    function setHeight(int $minheight = 50) {
        echo "The height is : $minheight <br>";
    }

    setHeight(350);
    setHeight(); // will use the default value of 50
    setHeight(135);
    setHeight(80);

    separer(longeurLigneSepar);

?>