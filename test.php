<?php 
    require "./personnage.php";
    

   // Création d'un personnage de jeux vidéo de class Personnage
   $personnage1 = new Personnage("Zelda",10,10,10,10, []);

   // Affichage des caractéristiques du personnag via une méthode 
   $personnage1 -> description_personnage();

   

    // affichage des points de vie:
    echo $personnage1->getHealthPoint();

    // affichage des points d'attaque':
    echo $personnage1->getAttackPoint();

    // affichage des points de mana:
    echo $personnage1->getManaPoint();

    // affichage des points des items:
    var_dump($personnage1->getItems()) ;

    // ajout d'un item et vérification du tableau 
    $personnage1->setItems("couteau");
    var_dump($personnage1->getItems()) ;

    // Vérification via une méthode si l'item ajouté se trouve bien dans le sac. 
    $personnage1->searchItem("couteau");

    // Suppression d'un item et vérification du tableau 
    $personnage1->removeItem("couteau");
    var_dump($personnage1->getItems()) ;

    

    


 
?>





