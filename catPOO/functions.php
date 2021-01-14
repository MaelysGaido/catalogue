<?php

function displayArticle(Article $article) {
      echo '<tr>
        <th scope="row">' . $article->getName() . '</th>
        <td> ' . $article->getDescription() . ' </td>
        <td>'. $article->getPrice(). '</td>
        <td>'. $article->getWeigth() . '</td>
        <td>'. $article->getQuantity() . '</td>
        <td>'. $article->getAvailable() . '</td>
        <td>'. $article->getSize() . '</td>
      </tr>';

}

function displayCatalogue(Catalogue $catalogue) {
    
       echo ' <table class="table">
    <thead>
      <tr>
        <th scope="col">Name</th>
        <th scope="col">Description</th>
        <th scope="col">Price</th>
        <th scope="col">weigth</th>
        <th scope="col">quantity</th>
        <th scope="col">available</th>
        <th scope="col">size</th>
      </tr>
    </thead>
    <tbody>';
    foreach ($catalogue->getListProducts() as $item) {
        displayArticle($item);
    }
    echo '</tbody>
  </table>';
       
}


function displayClient(Client $client){
    echo $client->getFirstName();
    echo $client->getLastName();
}

function displayListeClients(listeClients $ListeClients) {
    foreach ($ListeClients->getListeClients() as $personnes) {
        displayClient($personnes);
     }
}

