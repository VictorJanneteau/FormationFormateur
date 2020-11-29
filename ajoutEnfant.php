<!-- PARTIE B : REQUETES INSERT-->
<!DOCTYPE HTML>
<html>
    <body>
    <?php
        include("bdd.php");

        if(isset($_POST['boutonEnfantAjout']))
        {
            $nomEnfant=$_POST['nomEnfant'];
            $prenomEnfant=$_POST['prenomEnfant'];
            $ageEnfant=$_POST['ageEnfant'];
            $villeEnfant=$_POST['villeEnfant'];

            $ajoutEnfant = $bdd->prepare('INSERT INTO PARTIEB__ENFANTS (prenomEnfant,nomEnfant,ageEnfant,villeEnfant) 
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