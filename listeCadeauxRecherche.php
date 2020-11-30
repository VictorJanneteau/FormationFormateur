<!-- PARTIE A : REQUETES SELECT-->
<!-- EXERCICE 3 -->
<!DOCTYPE html>
<html>

    <head>
        <title>Résultat</title>
        <meta charset="UTF8"/>
        <link rel="stylesheet" href="style.css">
    </head>

    <body>
        <div class="center-div">
            <h1>Résultat(s) de la recherche</h1>
            <table style="margin-left: 45%">
                <thead>
                    <tr>
                        <th>DESCRIPTION</th>
                        <th>PRIX</th>
                    </tr>
                </thead>
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
                            echo"<tbody><tr><td>";
                            echo $donnees['descriptionCadeau'];
                            echo "</td><td>";
                            echo $donnees['prixCadeau'];
                            echo "</td></tr></tbody>";
                        }
                        
                        $listeCadeauxRecherche->closeCursor();
                    }
                ?>
            </table>
        </div>
    </body>
</html>
