<?php
//Démarrage de la session
session_start();

//Affecter l'horadatage de la session
date_default_timezone_set('Europe/Paris');

//Si il y n'y a pas de session en cours on affecte un horodatage à la session
if (!isset($_SESSION['dateFirstVisit'])) {
    $_SESSION['dateFirstVisit'] = date('Y-m-d-H:i:s');
}

//Compteur de pages visités, incrément de 1 à chaque fois qu'on repasse par l'index
$_SESSION['countViewPage'] = $_SESSION['countViewPage'] +1;

//Traitement via Front Controller

//Déclaration et affectation de la variable pageFiltree avec le filter_input
$pageFiltree = filter_input(INPUT_GET, 'page', FILTER_SANITIZE_SPECIAL_CHARS);


if (isset($pageFiltree)){
    //Le getpage existe
    if ($pageFiltree== "cv") {
        //La page demandée est la page cv.php
        require 'pages/cv.php';
    } else if ($pageFiltree == "hobby" ) {
        //La page demandée est la page hobby.php
        require 'pages/hobby.php';
    } else if ($pageFiltree == "contact" ) {
        //La page demandée est la page contact.php
        require 'pages/contact.php';
    } else {
        //Le $_GET['page'] n'est pas une page du site
        require 'pages/erreur404.php';
    }

} else {
    //La page demandée n'exite pas, on renvoie la page d'accueil
    require 'pages/cv.php';
}

?>
