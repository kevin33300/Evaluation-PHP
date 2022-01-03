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
            echo $this->name. " dispose de " . $this->attack ." points d'attaque, ". $this->defense .  " points de défense et " .$this->mana . "points de mana ! Vous n'avez pas d'items pour l'instant. \n";

        }

        // Création des méthodes pour afficher les caractéristiques du joueur en cours de Jeu (perfectible mais je ne connais pas encore la méthode via match)

        public function getHealthPoint() {
            return "Vous avez ". $this->health_point ." points de santé . \n"; 
        }

        public function getAttackPoint() {
            return "Vous avez ". $this->attack ." points dattaque .\n " ;
        }

        

        public function getDefensePoint() {
            return "Vous avez ". $this->defense ." points de défense . \n" ;
        }

        public function getManaPoint() {
            return "Vous avez ". $this->mana  ." points de mana . \n" ;
        }

        public function getItems() {
            return $this->items;
        }

        //  Création d'une méthode pour ajouter un objet dans la liste items

        public function setItems($item) {
            array_push($this->items,$item);
            echo "Vous avez ajouté un ".$item . " à vos items ";
        }

        //  Création d'une méthode pour rechercher si l'on possède un item 
        public function searchItem($item) {
            if (array_search($item, $this->items)) {
                echo " Vous possédez bien un ". $item ." dans votre sac . ";
            }
        }

        //  Création d'une méthode pour supprimer un item 
        public function removeItem ($item) {
            unset($this->items[array_search($item,$this->items)]);
        }



       
}


        


?>