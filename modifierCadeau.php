
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

            $ajoutEnfant = $connect->prepare('INSERT INTO ENFANTS (prenomEnfant,nomEnfant,ageEnfant,villeEnfant) 
            VALUES(:nomEnfant, :prenomEnfant, :ageEnfant, :villeEnfant)');
            $ajoutEnfant->bindValue(":nomEnfant",$nomEnfant, PDO::PARAM_STR);
            $ajoutEnfant->bindValue(":prenomEnfant",$prenomEnfant, PDO::PARAM_STR);
            $ajoutEnfant->bindValue(":ageEnfant",$ageEnfant, PDO::PARAM_STR);
            $ajoutEnfant->bindValue(":villeEnfant",$villeEnfant, PDO::PARAM_STR);
            $ajoutEnfant->execute();
        }

    ?>

</body> 
</html> 