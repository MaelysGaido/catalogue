<?php
require_once 'bdd.php';
require_once 'Article.php';

class Catalogue {
    //création du tableau d'objets
    private $list_products = array();

    //constructeur - remplissage du cat. avec bdd
    public function  __construct() {
        $bdd = connect();
        //query de chaque ligne de la table 
        $reponse = $bdd->query('SELECT * FROM products ');
        //boucle qui parcourt chaque ligne 
        while ($data = $reponse->fetch()){
        //création des objets
            $product = new Article($data['id'],$data['name'],$data['description'],$data['price'],$data['picture'],$data['weight'],$data['quantity'],$data['available']);
            array_push($this->list_products, $product);
        }
    }
    
    public function getListProducts() {
        return $this->list_products;
    }
}

