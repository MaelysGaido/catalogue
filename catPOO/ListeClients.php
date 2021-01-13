<?php
require_once 'bdd.php';
require_once 'Clients.php';


class ListeClients {
    private $liste_clients = array(); 
    
    public function construct() {
        $bdd = connect();
        $reponse = $bdd->query('SELECT * FROM customers ');
        while ($data = $reponse->fetch()) {
            $customer = new Client ($customer['id'],$customer['first_name'],$customer['last_name']);
            array_push($this->list_clients, $customer);
        }
    }

    public function getListeClients() {
        return $this->liste_clients;
    }

}