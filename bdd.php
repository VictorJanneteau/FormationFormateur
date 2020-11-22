<?php

try {
    $bdd = new PDO('mysql:host=localhost;dbname=formationFormateur;charset=utf8', 'root', 'root'); 
    echo("connexion reussie");
}

catch (Exception $e){
    die('Erreur : ' . $e->getMessage());
}
?>
