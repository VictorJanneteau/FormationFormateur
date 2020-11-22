<!DOCTYPE html>
<html>
    <body>
        <?php
            include("bdd.php");
           
            if(isset($_POST['boutonCadeauRecherche']))
            {
                $cadeauRecherche=$_POST['nomCadeauRecherche'];
                
                $listeCadeauxRecherche=$bdd->prepare("SELECT * FROM PARTIEA__CADEAUX WHERE descriptionCadeau=:cadeauRecherche ");
                $listeCadeauxRecherche->bindValue(":cadeauRecherche",$cadeauRecherche, PDO::PARAM_STR);
                $listeCadeauxRecherche->execute();

                

                While($donnees = $listeCadeauxRecherche->fetch())
                {
                    echo "Description Cadeau : ".$donnees['descriptionCadeau'];
                    echo "<br>";
                    echo "Prix Cadeau : ".$donnees['prixCadeau'];
                    echo "<br>";
                    echo "<br>";
                }
                
                $listeCadeauxRecherche->closeCursor();

            
            }
           

            
           
            
            
            
   
        ?>
    </body>
</html>
