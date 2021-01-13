<?php

function connect() {
    // sécuriser la connexion
    try{
        //connexion
        $bdd = new PDO ('mysql:host=localhost;dbname=poo_eshop;charset=utf8', 'root', 'root');
        }
        //repère erreurs
        catch (Exception $e)
        {
            die('Erreur : ' . $e->getMessage());
        }
        // pour afficher la BDD
        return $bdd;
}