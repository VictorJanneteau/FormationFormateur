<!DOCTYPE html>


<html>
    <head>
        <title>Accueil</title>
        <meta charset="UTF8"/>
        <link rel="stylesheet" href="style.css">
    </head>
    
    <body>
        <a href="listeCadeaux.php"><button>Liste des cadeaux</button></a>
        <br> 
        <!-- PARTIE A - EXERCICE 2  -->
        <a href="listeEnfants.php"><button>Liste des enfants</button></a>  
        <br><br>
        <!-- PARTIE A - EXERCICE 3-->
        <form method="POST" action="listeCadeauxRecherche.php">
            <label>Descrption du cadeau recherché :</label>
            <br>
            <input type="text" name="nomCadeauRecherche" required="required">
            <input type="submit" name="boutonCadeauRecherche" value="Rechercher"/>
        </form>
        <br><br>

    
    
    
    <!-- PARTIE E - EXERCICE 2-->
    <?php include("bdd.php");?>
    <?php session_start();?>


    <table>
        <thead>
        <tr><th colspan="2">INFORMATION UTILISATEUR</th></tr>
        </thead>
        
        <tbody>
        <tr> 
            <td>NOM</td>
            <td>EQUIPE</td>
        </tr>
        <tr> 
            <td><?php echo $_SESSION['nomLutin']; ?></td>
            <td><?php echo $_SESSION['equipeLutin']; ?></td>
        </tr>
        </tbody>
    </table>

    <!-- PARTIE E - EXERCICE 3-->

    <form method="POST" action="connexion.php">
            <input type="submit" name="boutonDeconnexion" value="Deconnexion"/>
    </form>




       
        
        
    
 


    </body>
</html>

