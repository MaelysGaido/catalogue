<?php

function displayArticle(Article $article) {
    echo $article->getName();
}

function displayCatalogue(Catalogue $catalogue) {
    foreach ($catalogue->getListProducts() as $item) {
        displayArticle($item);
    }
}


function displayClient(Client $client){
    echo $client->getFirstName();

}

function displayListeClients(listeClients $ListeClients) {
    foreach ($ListeClients->getListClients() as $personnes) {
        displayClient($personnes);
     }
}

