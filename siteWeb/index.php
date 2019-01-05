<!DOCTYPE html>
<html>
    <head>
    </head>
    <body>

    <script src="scripts.js"></script>

    <?php 
        require('functions.php');
        define ("longeurLigneSepar" , "200");
        define ("longeurLigneSeparMoitie" , "100");
    ?>    


    <h2>My First JavaScript</h2>

    <p id="dateHeure"></p>

    <button type="button"
        onclick="document.getElementById('dateHeure').innerHTML = Date()">
        Click me to display Date and Time.
    </button>

    <button type="button" onclick="changerTaille('42px')">Agrandir</button>
    <button type="button" onclick="changerTaille('14px')">Réduire</button>

    <p id="paragraphe01">A Paragraph</p>
    <button type="button" onclick="sePresenter()">Présentation</button>
    <?php $red = "Red"; $green="Green"; $jaune="Yellow"; $salut="Saluuuut"; ?>
    <button type="button" onclick="seColorier('<?php echo $red; ?>')">Colorier en rouge</button>
    <button type="button" onclick="seColorier('<?php echo $green; ?>')">Colorier en vert</button>
    <button type="button" onclick="seColorier('<?php echo $jaune; ?>')">Colorier en jaune</button>
    <button type="button" onclick="afficherAlerte('<?php echo $salut; ?>')">Alerter</button>


    

    <?php
        // le type Null
        echo "<h3>Le type NULL</h3>";
        $x = "Hello world!";
        $x = null;
        var_dump($x);
        separer(longeurLigneSepar);
    ?> 
    
    <?php
        // typage
        echo "<h3>Typage</h3>";
        $x = 5;
        $y = 10;

        function myTest01() {
            global $x, $y;
            $y = $x + $y;
        }

        myTest01();
        echo $y; // outputs 15
        separer(longeurLigneSepar);
    ?> 
     

    <?php
        // déclaration globale de variables dans une fonction
        // car les variables globales ne sont pas reconnues à l'intérieur d'une fonction
        // de même, une variable déclarée à l'intérieur d'une fonction n'est pas reconnue hors cette fonction 
        echo "<h3>Déclaration globale de variables dans une fonction</h3>";
        $x = 5;
        $y = 10;

        function myTest011() {
            global $x, $y;
            $y = $x + $y;
        }

        myTest011();
        echo $y; // outputs 15
        separer(longeurLigneSepar);
    ?> 

    <?php
        // php stocke les variable globales dans un tableau nommé $GLOBALS[index]
        // les index sont les noms des variables
        echo "<h3>le tableau des variables globales</h3>";
        $x = 5;
        $y = 10;

        function myTest012() {
            $GLOBALS['y'] = $GLOBALS['x'] + $GLOBALS['y'];
        }

        myTest012();
        echo $y; // outputs 15
        separer(longeurLigneSepar);
    ?>     
     
     <?php
        // préserver une variable après utilisation dans une fonction
        echo "<h3>préserver une variable après utilisation dans une fonction</h3>";
        function myTest02() {
            static $x = 0;
            echo $x;
            $x++;
        }

        myTest02();
        myTest02();
        myTest02();

        separer(longeurLigneSepar);
    ?> 

       <?php 
       // constantes
       echo "<h3>constantes</h3>";
        echo "Salut ! ";
        DEFINE("MOI", "mehdi chaachoo", true); 
        echo moi;
        separer(longeurLigneSepar);
       ?>
       
       <?php 
       // constantes tableau
       echo "<h3>constantes tableau</h3>";
        define ("languages", ["php", "javascript", "python"]);
        define ("frameworks", ["angularjs", "vuejs"]);
        echo languages[1];
        echo '<br>';
        echo frameworks[0];
        separer(longeurLigneSepar);
       ?>
       
       <?php 
       // les constantes sont globales
       echo "<h3>les constantes sont globales</h3>";
        function Test01 () {
            echo "Globale: ".languages[2];
        }
        Test01();
        separer(longeurLigneSepar);

        ?>

        <?php
        // fonction de string
        echo "<h3>Fonctions de string</h3>";
        echo strlen("Hello world!"); // outputs 12 // longueur de la chaine
        echo '<br>';
        echo str_word_count("Hello world!"); // outputs 2 // nombre de mots
        echo '<br>';
        echo strrev("Hello world!"); // outputs !dlrow olleH // renverse la chaine
        echo '<br>';
        echo strpos("Hello world!", "world"); // outputs 6 // cherche position d'un texte
        echo '<br>';
        echo str_replace("world", "Dolly", "Hello world!"); // outputs Hello Dolly! // remplacer
        echo '<br>';
        $chaine = "Dans ce texte, essayons d'afficher juste les 10 premiers caractères. On coupe donc le texte."; 
        echo substr($chaine, 0, 10); // affiche " Dans ce te " // extraction
        
        separer(longeurLigneSepar);
        
        ?> 

        <?php
        // concaténation de chaines
        echo "<h3>concaténation de chaines</h3>";
            $s1 = 'j\'ai eu '; $s2 = '10 sur 10';
            echo $s1.$s2; 
            echo "<br>";
            $s1 .= $s2;
            echo $s1;
            separer(longeurLigneSepar);
            ?>    

        <?php

        // utilisation du Modulus
        echo "<h3>utilisation du Modulus</h3>";
            $a = 2; $b = 5;
            echo $b % $a;
            separer(longeurLigneSepar);
            ?>

        <?php
        // deux variables identiques (valeur et type)
        echo "<h3>deux variables identiques (valeur et type)</h3>";
            $a = 5; $b = 5;
            echo var_dump($b === $a);
            echo '<br>';
            $a = 5; $b = '5';
            echo var_dump($b === $a);
            separer(longeurLigneSepar);
            ?>

        <?php
        // utilisatrion de Spaceship (introduit dans PHP7)
        echo "<h3>utilisatrion de Spaceship (introduit dans PHP7)</h3>";
            $x = 5;  
            $y = 10;
            echo ($x <=> $y); // returns -1 because $x is less than $y
            echo "<br>";
        
            $x = 10;  
            $y = 10;
            echo ($x <=> $y); // returns 0 because values are equal
            echo "<br>";
        
            $x = 15;  
            $y = 10;
            echo ($x <=> $y); // returns +1 because $x is greater than $y
            separer(longeurLigneSepar);
            ?>

        <?php
        // pre-incrementation post-incrementation ...
        echo "<h3>pre-incrementation post-incrementation ...</h3>";
            $a = 10; $b = 10; $c = 10; $d = 10;
            echo ++$a; echo ' , ';
            echo $b++; echo ' , ';
            echo --$c; echo ' , ';
            echo $d--; 
            separer(longeurLigneSepar);
            ?>    

        <?php
        // opérateurs pour tableaux
        echo "<h3>opérateurs pour tableaux</h3>";
            $t1 = array("serveur" => "linux", "langage" => "PHP");
            $t2 = array("framework" => "vuejs", "editeur" => "Visual Studio Code");
            $t = $t1+$t2;
            // "print_r" écrit une information "lisible" à propos d'une variable ambigüe, 
            // comme un array ou une requête.
            print_r ($t);
           
            separer(longeurLigneSepar);
            ?>    

        <?php
        // opérateurs d'assignation conditionnée
        echo "<h3>opérateurs d'assignation conditionnée</h3>";
        // ?:
        echo "<h4>?:</h4>";
            // if empty($user) = TRUE, set $status = "anonymous"
            echo $status = (empty($user)) ? "anonymous" : "logged in";
            echo("<br>");

            $user = "John Doe";
            // if empty($user) = FALSE, set $status = "logged in"
            echo $status = (empty($user)) ? "anonymous" : "logged in";
           
            separer(longeurLigneSeparMoitie);

        // ??
        echo "<h4>??</h4>";
            // variable $user is the value of $_GET['user']
            // and 'anonymous' if it does not exist
            echo $user = $_GET["user"] ?? "anonymous";
            echo("<br>");
  
            // variable $color is "red" if $color does not exist or is null
            echo $color = $color ?? "red";

            separer(longeurLigneSepar);
            ?>    

        <?php
            // utilisation de foreach
            echo "<h3>foreach</h3>";
            
            $colors = array("red", "green", "blue", "yellow");

            foreach ($colors as $value) {
                echo "$value <br>";
            }
            separer(longeurLigneSepar);
        ?>     

        <?php 
            echo $_SERVER['PHP_SELF'];
            echo "<br>";
            echo $_SERVER['SERVER_NAME'];
            echo "<br>";
            echo $_SERVER['SERVER_SOFTWARE'];
            echo "<br>";
            echo $_SERVER['HTTP_HOST'];
            echo "<br>";
            echo $_SERVER['HTTP_USER_AGENT'];
            echo "<br>";
            echo $_SERVER['SCRIPT_NAME'];
            echo "<br>";
            echo $_SERVER['REQUEST_METHOD'];

            separer(longeurLigneSepar);

        ?>

<?php
// Nous créons une classe « Personnage ».
echo "<h3>Classes</h3>";
    class Personnage
    {
        private $_force;
        private $_localisation;
        private $_experience;
        private $_degats;
        
        // Nous déclarons une méthode dont le seul but est d'afficher un texte.
        public function parler()
        {
            echo 'Je suis un personnage !';
        }
    }
    
    $perso = new Personnage;
    $perso->parler();

    separer(longeurLigneSepar);

?>


    </body>
</html>    