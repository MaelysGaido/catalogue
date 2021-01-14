<?php
require_once 'bdd.php';
require_once 'Clients.php';


class ListeClients {
    private $liste_clients = array(); 
    
    public function __construct() {
        $bdd = connect();
        $reponse = $bdd->query('SELECT * FROM customers ');
        while ($data = $reponse->fetch()) {
            $customer = new Client ($data['id'],$data['first_name'],$data['last_name']);
            array_push($this->liste_clients, $customer);
        }
    }

    public function getListeClients() {
        return $this->liste_clients;
    }

}