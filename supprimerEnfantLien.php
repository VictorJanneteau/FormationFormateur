<!-- PARTIE D : REQUETES DELETE-->
<!DOCTYPE HTML>
<html>
    <body>
    <?php
        include("bdd.php");

        $supprimerEnfant = $bdd->prepare("DELETE FROM PARTIED__ENFANTS WHERE idEnfant=:id");
        $supprimerEnfant->bindValue(':id', $_GET['idEnfant'], PDO::PARAM_STR);
        $supprimerEnfant->execute();

        if(isset($_POST['boutonEnfantSupp']))
        {
            $prenomEnfantSupp=$_POST['prenomEnfantSupp'];
            $nomEnfantSupp=$_POST['nomEnfantSupp'];
            $ageEnfantSupp=$_POST['ageEnfantSupp'];
        }

    ?>

</body> 
</html> 