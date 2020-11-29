<!-- PARTIE A : REQUETES SELECT-->
<!-- EXERCICE 2 -->
<!DOCTYPE html>
<html>

<body>
        
        <?php
            //inclusion du fichier de connexion à la BDD
            include("bdd.php");
            //récuperation de toutes les informations sur les enfants enregistrés dans la table PARTIEA__ENFANTS
            $listeEnfants = $bdd->prepare("SELECT * FROM PARTIEA__ENFANTS"); 
            //execution de la requete
            $listeEnfants->execute();
            //affichage des données
            While($donnees = $listeEnfants->fetch())
            {
                echo "Nom enfant : ".$donnees['nomEnfant'];
                echo "<br>";
                echo "Prenom enfant : ".$donnees['prenomEnfant'];
                echo "<br>";
                echo "Age enfant : ".$donnees['ageEnfant'];
                echo "<br>";
                echo "Ville de l'enfant : ".$donnees['villeEnfant'];
                echo "<br>";
                echo "<br>";
                
                
            }
            
            $listeEnfants->closeCursor();
        ?>
        
    </body>
</html>