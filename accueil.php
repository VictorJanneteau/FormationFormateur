<!DOCTYPE html>

<!-- PARTIE E - EXERCICE 2-->
<?php include("bdd.php");?>
<?php session_start();?>


<html>
    <head>
        <title>Accueil</title>
        <meta charset="UTF8"/>
        <link rel="stylesheet" href="style.css">
    </head>
    
    <body>
    <div  class="right-div">
            <table>
                <thead>
                <tr>
                    <th colspan="2">INFORMATIONS UTILISATEUR</th>
                    <th></th>
                    <th>
                        <form method="POST" action="connexion.php">
                            <!-- PARTIE E - EXERCICE 3-->
                            <input type="submit" name="boutonDeconnexion" id="buttonSmall" value="Déconnexion"/>
                        </form>
                    </th>
                </tr>
                </thead>
                
                <tbody>
                <tr> 
                    <td>NOM</td>
                    <td>EQUIPE</td>
                    <td></td>
                    <td></td>
                </tr>
                <tr> 
                    <td><?php echo $_SESSION['nomLutin']; ?></td>
                    <td><?php echo $_SESSION['equipeLutin']; ?></td>
                    <td></td>
                    <td></td>
                </tr>
                </tbody>
            </table>
    </div>

    <div class="center-div">
        <h1>Bienvenue !</h1>

        <br><br> 
        <a href="listeCadeaux.php"><button class="button">Liste des cadeaux</button></a>


        <br><br><br> 
        <!-- PARTIE A - EXERCICE 2  -->
        <a href="listeEnfants.php"><button class="button">Liste des enfants</button></a>  


        <!-- PARTIE A - EXERCICE 3 -->
        <form method="POST" action="listeCadeauxRecherche.php">
            <br><br>
            <label><strong>Description du cadeau recherché :</strong></label>
            <br>
            <input type="text" placeholder="ex : PS5" name="nomCadeauRecherche" required="required" class="inputText">
<<<<<<< HEAD
            <input type="image" name="boutonCadeauRecherche" src="https://cdn.icon-icons.com/icons2/1514/PNG/512/magnifier_105027.png" border="0" alt="Submit" style="width: 15px;" />
=======
          

>>>>>>> 0827d0ba966b42c8e2f040711b08299c9c982278
            <!-- <input type="submit" name="boutonCadeauRecherche" value="Rechercher"/>--> 
        </form>
    </div>
    
    








       
        
        
    
 


    </body>
</html>

