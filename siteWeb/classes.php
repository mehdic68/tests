<?php 
    class Livre{
        private $_ref;
        private $_titre;
        private $_auteur;
        private $_editeur;
        private $_edition;

        public function Afficher($monTitre) {
            $this->_titre = $monTitre;
            echo $this->_titre;
        }
    } 
    $kitab = new Livre;
    $kitab->Afficher('Al ayam');
    
?>    