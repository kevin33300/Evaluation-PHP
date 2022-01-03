<?php 

    //  Création de la class Personnage 
    class Personnage {

        // Définition des attributs:
        public  $name;            // Nom du personnage
        private $health_point;    // Points de vie du personnage 
        private $attack;          // Points d'attaque du personnage 
        private $defense;         // Points de défense du personnage 
        private $mana;            // Points mana du personnage
        public  $items;

        // Création de la méthode permettant de construire l'objet 

        public function __construct (
            // On nomme ici les paramètres d'entrée pour la création du personnage 
            $name,
            $health_point,
            $attack,
            $defense,
            $mana,
            $items
            
        ) {
            $this->name = $name;
            $this->health_point = $health_point;
            $this->attack = $attack;
            $this->defense = $defense;
            $this->mana = $mana;
            $this->items = $items;

        }

        // Création de la méthode permettant la description du personnage créé
        public function description_personnage() {
            echo " Votre personnage créé s'appelle ". $this->name . " ! \n";
            echo $this->name. " dispose de " . $this->attack ." points d'attaque, ". $this->defense .  " points de défense et " .$this->mana . "points de mana ! Vous n'avez pas d'items pour l'instant. ";

        }

       
    }


        


?>