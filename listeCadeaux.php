<!DOCTYPE html>
<html>
    <body>
        <?php
            include("bdd.php");
           
            $listeCadeaux = $bdd->prepare("SELECT * FROM PARTIEA__CADEAUX"); 
            $listeCadeaux->execute();
            
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
