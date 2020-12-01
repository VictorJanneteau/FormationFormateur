<!-- PARTIE C : REQUETES UPDATE-->
<!DOCTYPE html>
<html>
    <head>
        <title>Accueil</title>
        <meta charset="UTF8"/>
        <link rel="stylesheet" href="style.css">
    </head>
    
    <body>
        <div class="center-div">
            <h1>Modifier le prix d'un cadeau</h1>
            <form method="POST" action="modifierCadeau.php">
                <select name="descriptionCadeau" type="text">
                <?php
                    include("bdd.php");
                    $listeCadeaux = $bdd->prepare("SELECT * FROM PARTIEB__CADEAUX");
                    $listeCadeaux->execute();
                    while ($donnees = $listeCadeaux->fetch())
                    {
                        echo '<option value="' . $donnees['descriptionCadeau'] . '">' . $donnees['descriptionCadeau'] .'</option>';
                    }            
                          
                    $listeCadeaux->closeCursor();
                ?></select>
                <br>
                <input type="text" name="ancienPrixCadeau" placeholder="Ancien prix" required="required" class="inputText">
                <br>
                <input type="text" name="nouveauPrixCadeau" placeholder="Nouveau prix" required="required" class="inputText">
                <br>
                <input type="submit" name="boutonCadeauModifier" value="Modifier" id="buttonSmall"/>
            </form>
        </div>
    </body>
</html>

