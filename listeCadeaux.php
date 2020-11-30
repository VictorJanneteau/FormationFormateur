<!-- PARTIE A : REQUETES SELECT-->
<!-- EXERCICE 1 -->
<!DOCTYPE html>
<html>
    <head>
        <title>Liste des cadeaux</title>
        <meta charset="UTF8"/>
        <link rel="stylesheet" href="style.css">
    </head>

    <body>
        <div class="center-div">
            <h1>Liste des cadeaux</h1>
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
                    //recupération de toutes les informations de la table PARTIEA__CADEAUX
                    $listeCadeaux = $bdd->prepare("SELECT * FROM PARTIEA__CADEAUX"); 
                    //execution de la requete
                    $listeCadeaux->execute();
                    //affichage des données
                    While($donnees = $listeCadeaux->fetch())
                    {
                        echo"<tbody><tr><td>";
                        echo $donnees['descriptionCadeau'];
                        echo "</td><td>";
                        echo $donnees['prixCadeau'];
                        echo "</td></tr></tbody>";
                    }
                    
                    $listeCadeaux->closeCursor();
                ?>
            </table>
        </div>
    </body>
</html>
