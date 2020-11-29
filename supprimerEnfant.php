<!-- PARTIE D : REQUETES DELETE-->
<!DOCTYPE HTML>
<html>
    <body>
    <?php
        include("bdd.php");

        if(isset($_POST['boutonEnfantSupprimer']))
        {
            $prenomEnfantSupp=$_POST['prenomEnfantSupp'];
            $nomEnfantSupp=$_POST['nomEnfantSupp'];
            $ageEnfantSupp=$_POST['ageEnfantSupp'];

            $supprimerEfant= $bdd->prepare('DELETE FROM PARTIEB__ENFANTS WHERE nomEnfant=:nomEnfantSupp AND prenomEnfant=:prenomEnfantSupp AND ageEnfant=:ageEnfantSupp');
            $supprimerEfant->bindValue(":nomEnfantSupp",$nomEnfantSupp, PDO::PARAM_STR);
            $supprimerEfant->bindValue(":prenomEnfantSupp",$prenomEnfantSupp, PDO::PARAM_STR);
            $supprimerEfant->bindValue(":ageEnfantSupp",$ageEnfantSupp, PDO::PARAM_STR);
            $supprimerEfant->execute();
        }

    ?>

</body> 
</html> 