<!-- PARTIE E : SESSION-->
<!DOCTYPE HTML>
<html>
    <body>
    <?php
        //inclusion du fichier de connexion a la base de données
        include("bdd.php");
        //demarre une nouvelle session ou reprend une session existante
        session_start();

        if(isset($_POST['boutonConnexion']))
        {
            //récuperation des informations saisies dans le formulaire de recherche
            $nomLutinConnect=$_POST['nomLutinConnect'];
            $mdpLutinConnect=$_POST['mdpLutinConnect'];
            //récuperation des informations dans la base de données
            $connexion = $bdd->prepare('SELECT * FROM PARTIEE__LUTINS WHERE nomLutin=:nomLutinConnect AND mdpLutin=:mdpLutinConnect');
            $connexion->bindValue(":nomLutinConnect",$nomLutinConnect, PDO::PARAM_STR);
            $connexion->bindValue(":mdpLutinConnect",$mdpLutinConnect, PDO::PARAM_STR);
            //execution de la requete
            $connexion->execute();
            //récupération des résultats de la requete dans une variable 
            $resultat=$connexion->fetch();
           
            //Récuperation des valeurs stockées
            if($resultat){
                $_SESSION['idLutin']=$resultat['idLutin'];
                $_SESSION['nomLutin']=$resultat['nomLutin'];
                $_SESSION['equipeLutin']=$resultat['equipeLutin'];
            
            //redirection vers la page accueil.html
            header('Location: accueil.php');
            }
            else{
                echo"erreur de connexion";
            }
        }

        //PARTIE E - EXERCICE 3
        if(isset($_POST['boutonDeconnexion'])){ 	
            session_destroy();
            header('location: connexion.html');
        }   

    ?>

</body> 
</html> 