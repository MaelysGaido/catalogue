
<?php
// lien avec les class
require_once 'ClassCatalogue.php';
require_once 'ListeClients.php';
require_once 'functions.php';



$catalogue = new Catalogue();



$listeClients = new ListeClients();
displayListeClients($listeClients);
var_dump($listeClients);

?>

<!DOCTYPE html>
<html>
<head>
<title>e-shop</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>

<body>
<?php
displayCatalogue($catalogue);
?>
</body>

</html>
   