<?php

    echo "*** connexion.php</br>";

    try	
    {
        echo 'Connexion à la BD place en cours';

        // On crée l'objet base de données "bdd" lié à la base Mysql et on lui attribue des paramètres de contrôle des erreurs
        $bdd = new PDO('mysql:host=localhost;dbname=lycee;charset=utf8', 'root', '');
        $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // Autre possibilité d'écriture
        /*
        $bdd = new PDO('mysql:host=localhost;dbname=lycee;charset=utf8', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
        */

        echo "... Connecté !</br></br>";
    }

    catch (PDOException $ex)
    {
        die('Erreur : ' . $ex->getMessage());
    }

?>