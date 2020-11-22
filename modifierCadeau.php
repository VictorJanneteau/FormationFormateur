
<!DOCTYPE HTML>
<html>
    <body>
    <?php
        include("bdd.php");

        if(isset($_POST['boutonCadeauModifier']))
        {
            $descriptionCadeau=$_POST['descriptionCadeau'];
            $ancienPrixCadeau=$_POST['ancienPrixCadeau'];
            $nouveauPrixCadeau=$_POST['nouveauPrixCadeau'];

            $modifierCadeau = $bdd->prepare('UPDATE PARTIEB__CADEAUX 
            SET prixCadeau =:nouveauPrixCadeau 
            WHERE prixCadeau=:ancienPrixCadeau AND descriptionCadeau=:descriptionCadeau');
            $modifierCadeau->bindValue(":nouveauPrixCadeau",$nouveauPrixCadeau, PDO::PARAM_STR);
            $modifierCadeau->bindValue(":ancienPrixCadeau",$ancienPrixCadeau, PDO::PARAM_STR);
            $modifierCadeau->bindValue(":descriptionCadeau",$descriptionCadeau, PDO::PARAM_STR);
            $modifierCadeau->execute();
        }

    ?>

</body> 
</html> 