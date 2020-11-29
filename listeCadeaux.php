<!-- PARTIE A : REQUETES SELECT-->
<!-- EXERCICE 1 -->
<!DOCTYPE html>
<html>
    <body>
        <?php
            //inclusion du fichier de connexion à la BDD
            include("bdd.php");
            //recupération de toutes les informations de la table PARTIEA__CADEAUX
            $listeCadeaux = $bdd->prepare("SELECT * FROM PARTIEA__CADEAUX"); 
            //execution de la requete
            $listeCadeaux->execute();
            //affichage des données
            While($donnees = $listeCadeaux->fetch())
            {
                echo "Description Cadeau : ".$donnees['descriptionCadeau'];
                echo "<br>";
                echo "Prix Cadeau : ".$donnees['prixCadeau'];
                echo "<br>";
                echo "<br>";
            }
            
            $listeCadeaux->closeCursor();
        ?>
    </body>
</html>
