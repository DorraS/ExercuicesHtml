<?php

    try	
    {
        // On crée l'objet base de données "bdd" lié à la base Mysql et on lui attribue des paramètres de contrôle des erreurs
        $bdd = new PDO('mysql:host=localhost;dbname=lms;charset=utf8', 'root', '');
        $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }catch (PDOException $ex)
    {
        die('Erreur : ' . $ex->getMessage());
    }

?>