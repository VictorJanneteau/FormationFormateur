<!DOCTYPE html>
<html>
    <body>
        <?php
            include("bdd.php");
           
            $listeEnfants = $bdd->prepare("SELECT * FROM PARTIEA__ENFANTS"); 
            $listeEnfants->execute();
            
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