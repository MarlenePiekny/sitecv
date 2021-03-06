<?php
//"Ajout du header"
$metaTitle = "Accueil";
$metaDescription = "Voici mon CV";
require 'template/header.php'
?>

<main>
    <h1>A propos</h1>
    <p>De nature curieuse, appliquée et avec un goût pour les applications digitales, je suis une
        formation de 6 mois en <strong>développement web</strong>. J'ai envie d'être au coeur des solutions qu'apportent
        le numérique
        notamment celles autour de l'expérience utilisateur. Je souhaite par la suite mettre mes nouvelles compétences au
        service d'une entreprise de Valence ou des environs pour mon <strong>alternance</strong> de 12 mois.
    </p>

    <h2>Mes compétences</h2>
    <ul>
        <li>Autonome</li>
        <li>Rigoureuse</li>
    </ul>

    <h2>Mes expériences</h2>
    <table class="tableau">

        <thead>
        <tr>
            <th>Durée</th>
            <th>Entreprise</th>
            <th>Lieu</th>
            <th>Poste</th>
        </tr>
        </thead>

        <tbody>
        <tr>
            <td>septembre 2020</td>
            <td>Domaine Combier</td>
            <td>Pont de l'Isère (26)</td>
            <td>Vendanges et activités en cave</td>
        </tr>

        <tr>
            <td>novembre 2018 - août 2020</td>
            <td>Thales DMS</td>
            <td>Mérignac (33)</td>
            <td>Chargée d'innovation et transformation digitale - Alternance</td>
        </tr>

        <tr>
            <td>novembre 2015 - août 2018</td>
            <td>ESSEC Programme Bachelor</td>
            <td>Cergy-Pontoise (95)</td>
            <td>Assistante pédagogique - Alternance</td>
        </tr>

        <tr>
            <td>février 2015 - août 2015</td>
            <td>Phone Régie pour EY</td>
            <td>La Défense (92)</td>
            <td>Hôtesse d'accueil</td>
        </tr>
        </tbody>

    </table>


</main>

<?php
//"Ajout du footer"
require 'template/footer.php'
?>