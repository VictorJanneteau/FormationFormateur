<!-- PARTIE A : REQUETES SELECT-->
<!-- EXERCICE 2 -->
<!DOCTYPE html>
<html>
    <head>
        <title>Liste des enfants</title>
        <meta charset="UTF8"/>
        <link rel="stylesheet" href="style.css">
    </head>

<body>
    <div class="center-div">
        <h1>Liste des enfants</h1>
        <table style="margin-left: 42%">
            <thead>
                <tr>
                    <th>NOM</th>
                    <th>PRENOM</th>
                    <th>AGE</th>
                    <th>VILLE</th>
                </tr>
            </thead>
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
                echo"<tbody><tr><td>";
                echo $donnees['nomEnfant'];
                echo "</td><td>";
                echo $donnees['prenomEnfant'];
                echo "</td><td>";
                echo $donnees['ageEnfant'];
                echo "</td><td>";
                echo $donnees['villeEnfant'];
                echo "</td></tr></tbody>";   
            }
            
            $listeEnfants->closeCursor();
        ?>
    </table>    
    </body>
</html>