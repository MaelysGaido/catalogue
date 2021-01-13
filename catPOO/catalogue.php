
<?php
// lien avec les class
require_once 'ClassCatalogue.php';
require_once 'Clients.php';
require_once 'functions.php';



$catalogue = new Catalogue();

displayCatalogue($catalogue);

$ListeClients = new Client();
displayClient($ListeClients);

?>