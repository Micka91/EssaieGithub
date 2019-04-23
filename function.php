<?php 
function getAllAnnonces() {
    $data = [
        "annonce1" => ["voiture", 1000]
    ];
    return $data;
}
function getFirstAnnonce() {
    $first = current(getAllAnnonces());
    return $first ;
}

?>