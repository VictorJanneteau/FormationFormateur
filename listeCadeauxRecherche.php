<!-- PARTIE A : REQUETES SELECT-->
<!-- EXERCICE 3 -->
<!DOCTYPE html>
<html>
    <body>
        <?php
            //inclusion du fichier de connexion à la BDD
            include("bdd.php");
           
            if(isset($_POST['boutonCadeauRecherche']))
            {
                //récupération a partir du formulaire de recherche de la valeur du champ 'nomCadeauRecherche'
                $cadeauRecherche=$_POST['nomCadeauRecherche'];
                //récupération des informations
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
