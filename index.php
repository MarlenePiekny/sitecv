
<?php

//Traitement du $_GET['page']

if (isset($_GET['page'])){
    //Le getpage existe
    if ($_GET['page']== "cv") {
        //La page demandée est la page cv.php
        require 'pages/cv.php';
    } else if ($_GET['page'] == "hobby" ) {
        //La page demandée est la page hobby.php
        require 'pages/hobby.php';
    } else if ($_GET['page'] == "contact" ) {
        //La page demandée est la page contact.php
        require 'pages/contact.php';
    } else {
        //Le $_GET['page'] n'est pas une page du site
        require 'pages/erreur404.php';
    }

} else {
    //Le $_GET['page'] n'exite pas, on renvoie la page d'accueil
    require 'pages/cv.php';
}

?>
